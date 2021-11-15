<?php
namespace App\Orunmila\Auth;

include '../Model/Personas.php';
include '../Storage/Session.php';
use App\Orunmila\Model\Personas;
use Orunmila\Storage\Session;

class Auth
{
    /**
     * Intenta autenticar al usuario.
     * Si tiene éxito, retorna true.
     * De lo contrario, retorna false.
     *
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function login(string $email, string $password): bool
    {
        // Buscamos el usuario por su email.
        $user = new Personas();
        $user = $user->getMail($email);

        // Verificamos si hay un usuario.
        if ($user !== null) {
            // Comparamos los passwords.
            if (password_verify($password, $user->getPassword())) {
                $this->setAsAuthenticated($user);
                return true;
            }
        }
        return false;
    }

    /**
     * Marca el $user como autenticado.
     *
     * @param Personas $user
     */
    public function setAsAuthenticated(Personas $user): void
    {
        Personas::set('id', $user->getId());
    }

    /**
     * Desautentica al usuario.
     */
    public function logout(): void
    {
        // unset($_SESSION['id']);
        Session::delete('id');
    }

    /**
     * Retorna si el usuario está autenticado o no.
     *
     * @return bool
     */
    public function isAuthenticated(): bool
    {
        // return isset($_SESSION['id']);
        return Session::has('id');
    }

    /**
     * Retorna el usuario autenticado.
     * Si no está autenticado, retorna null.
     *
     * @return Personas|null
     */
    public function getUser()
    {
        if (!$this->isAuthenticated()) {
            return null;
        }

        $usuario = new Personas();
        return $usuario->getByPk(Session::get('id'));
    }
}
