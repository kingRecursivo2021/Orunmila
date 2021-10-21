<?php
namespace App\Orunmila\Core;

use App\Orunmila\Envorinment\Parser;
use App\Orunmila\Lcobucci\JWT\Builder;
use App\Orunmila\Lcobucci\JWT\Token;
use App\Orunmila\Lcobucci\JWT\ValidationData;
use App\Orunmila\Lcobucci\JWT\Signer\Key;
use App\Orunmila\Lcobucci\JWT\Signer\Hmac\Sha256;

/**
 * Class Auth
 *
 * Administra lo relacionado a la autenticación:
 * - Autenticar.
 * - Cerrar Sesión.
 * - Verificar si está autenticado.
 * - Obtener el usuario autenticado.
 */
class AuthToken
{

    // Esto podría, aún mejor, estar en un archivo externo de configuración (ej: ".env") que php levante.
    const JWT_ISSUER = 'https://Orunmila.edu.ar';

    const JWT_SECRET = '8u12821unp2+doimd82jkalss033nhfv8-g576h3dfd2';

    /** @var int|null El id del usuario autenticado */
    protected $id;

    /** @var bool Si está autenticado ya o no. */
    protected $isLogged = false;

    /**
     * Intenta autenticar al usuario, e informa del resultado.
     *
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function login($email, $password)
    {
        // Buscamos si el usuario existe.
        try {
            $usuario = (new Usuarios())->getByEmail($email);
        } catch (Exception $e) {

            $usuario = (new Usuarios())->getByUsuario($email);
        }
        // Verificamos si el usuario existe.
        if ($usuario !== null) {
            // Comparamos el password.
            if (password_verify($password, $usuario->getPassword())) {
                $this->isLogged = true;
                $this->id = $usuario->getid();

                // Creamos el token y la cookie token
                $token = $this->generateToken($this->id);
                setcookie('token', (string) $token, [
                    'httponly' => true,
                    'samesite' => 'Lax',
                    'expires' => time() + 60 * 60 * 24
                ]);
                return true;
            }
        }

        return false;
    }

    /**
     * Cierra la sesión del usuario.
     */
    public function logout()
    {
        $this->isLogged = false;
        setcookie('token', null, [
            'httponly' => true,
            'samesite' => 'Lax',
            'expires' => time() - 60 * 60 * 24
        ]);
    }

    /**
     * Retorna si el usuario está autenticado o no.
     *
     * @return bool
     */
    public function estaAutenticado()
    {
        if ($this->isLogged) {

            return true;
        }

        $token = $_COOKIE['token'] ?? null;

        if (!is_string($token) || !$this->verificarToken($token)) {
            // print_r("||>");
            // print_r(is_string($token));
            // print_r("||>");
            // print_r($token);
            // print_r("||>");
            // print_r($this->verificarToken($token));

            return false;
        }

        $this->isLogged = true;
        return true;
    }

    /**
     * Genera el token de JWT.
     *
     * @param int $id
     * @return Token
     */
    protected function generateToken($id)
    {
        $signer = new Sha256();
        $token = (new Builder())->issuedBy(self::JWT_ISSUER)
            ->withClaim('id', $id)
            ->getToken($signer, new Key(self::JWT_SECRET));
        return $token;
    }

    /**
     * Verifica si el $token es válido.
     * Si lo es, retorna un array con los datos del usuario (por ahora, el id).
     * De lo contrario, retorna false.
     *
     * @param string $token
     * @return bool|array
     */
    public function verificarToken($token)
    {
        $token = (new Parser())->parse($token);

        $signer = new Sha256();
        $validationData = new ValidationData();
        $validationData->setIssuer(self::JWT_ISSUER);

        if ($token->validate($validationData) && $token->verify($signer, self::JWT_SECRET)) {
            $this->id = $token->getClaim('id');
            return true;
        }
        return false;
    }

    function sendPostData(string $url, array $post): string
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($post)
        ));
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    /**
     * Retorna el usuario autenticado.
     * Si no está autenticado, retorna null.
     *
     * @return Usuarios
     */
    public function getUsuario()
    {
        if (!$this->estaAutenticado()) {
            return null;
        }

        return (new Usuarios())->getById($this->id);
    }
}
