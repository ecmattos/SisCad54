<?php

namespace SisCad\Repositories;

use SisCad\Entities\User;
use SisCad\Entities\RoleUser;

use Prettus\Repository\Eloquent\BaseRepository;

class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    public function model()
    {
        return User::class;
    }
	
	private $user;
    private $roleUser;

	public function __construct(User $user, RoleUser $roleUser)
	{
		$this->user = $user;
        $this->roleUser = $roleUser;
	}

	public function allUsers()
	{
		return $this->user
			->where('name', '<>', '')
            ->orderBy('name', 'asc')
            ->get();
	}

    public function allUsersByRole($id)
    {
        return $this->roleUser
            ->whereRoleId($id)
            ->get();
    }

	public function findUserById($id)
    {
        return $this->user->find($id);
    }

    public function lastUser()
    {
        return $this->user->orderBy('id', 'desc')->first();
    }

    public function storeUser($input)
    {
        $user = $this->user->fill($input);
        $user->save();
    }

    public function findUserByConfirmationCode($confirmation_code)
    {
        return $this->user
            ->where('confirmation_code', '=', $confirmation_code)
            ->get();
    }

    public function enableUserById($id)
    {
        return $this->user
            ->where('id', '=', $id)
            ->update(['user_status_id' => 2]);
    }

    public function disableUserById($id)
    {
        return $this->user
            ->where('id', '=', $id)
            ->update(['user_status_id' => 1]);
    }
}