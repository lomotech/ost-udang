<?php

use Faker\Factory as Faker;
use App\Models\Permission;
use App\Repositories\PermissionRepository;
use Illuminate\Support\Facades\App;

trait MakePermissionTrait
{
    /**
     * Create fake instance of Permission and save it in database
     *
     * @param array $permissionFields
     * @return Permission
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     * @test
     */
    public function makePermission($permissionFields = [])
    {
        /** @var PermissionRepository $permissionRepo */
        $permissionRepo = App::make(PermissionRepository::class);
        $theme = $this->fakePermissionData($permissionFields);
        return $permissionRepo->create($theme);
    }

    /**
     * Get fake instance of Permission
     *
     * @param array $permissionFields
     * @return Permission
     * @test
     */
    public function fakePermission($permissionFields = [])
    {
        return new Permission($this->fakePermissionData($permissionFields));
    }

    /**
     * Get fake data of Permission
     *
     * @param array $permissionFields
     * @return array
     * @test
     */
    public function fakePermissionData($permissionFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'description' => $fake->word,
            'guard_name' => $fake->word,
            'level' => $fake->randomDigitNotNull,
            'group' => $fake->randomDigitNotNull,
            'created_at' => $fake->dateTime,
            'updated_at' => $fake->dateTime
        ], $permissionFields);
    }
}
