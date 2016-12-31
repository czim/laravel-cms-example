<?php

class AclModuleSeeder extends AbstractTableSeeder
{

    public function run()
    {
        $this->truncateTable('cms_role_users');
        $this->truncateTable('cms_roles');
        $this->truncateTable('cms_users');

        // Users
        /** @var Czim\CmsAuth\Sentinel\Users\EloquentUser $admin */
        $admin = factory(Czim\CmsAuth\Sentinel\Users\EloquentUser::class)->create([
            'email'         => 'super@admin.com',
            'first_name'    => 'Super',
            'last_name'     => 'Admin',
            'is_superadmin' => true,
        ]);

        /** @var Czim\CmsAuth\Sentinel\Users\EloquentUser $editor */
        $editor = factory(Czim\CmsAuth\Sentinel\Users\EloquentUser::class)->create([
            'email'      => 'some@editor.com',
            'first_name' => 'Some',
            'last_name'  => 'Editor',
        ]);

        /** @var Czim\CmsAuth\Sentinel\Users\EloquentUser $guest */
        $guest = factory(Czim\CmsAuth\Sentinel\Users\EloquentUser::class)->create([
            'email'      => 'some@guest.com',
            'first_name' => 'Some',
            'last_name'  => 'Guest',
        ]);

        // Roles
        $adminRole = new \Czim\CmsAuth\Sentinel\Roles\EloquentRole([
            'slug' => 'admin',
            'name' => 'Administrator',
            'permissions' => [
                'acl.roles.show' => true,
                'acl.roles.edit' => true,
                'acl.roles.create' => true,
                'acl.roles.delete' => true,
                'acl.users.show' => true,
                'acl.users.edit' => true,
                'acl.users.create' => true,
                'acl.users.delete' => true,
                'models.app-models-brand.show' => true,
                'models.app-models-brand.edit' => true,
                'models.app-models-brand.create' => true,
                'models.app-models-brand.delete' => true,
                'models.app-models-category.show' => true,
                'models.app-models-category.edit' => true,
                'models.app-models-category.create' => true,
                'models.app-models-category.delete' => true,
                'models.app-models-product.show' => true,
                'models.app-models-product.edit' => true,
                'models.app-models-product.create' => true,
                'models.app-models-product.delete' => true,
                'models.app-models-variant.show' => true,
                'models.app-models-variant.edit' => true,
                'models.app-models-variant.create' => true,
                'models.app-models-variant.delete' => true,
            ],
        ]);
        $adminRole->save();

        $editorRole = new \Czim\CmsAuth\Sentinel\Roles\EloquentRole([
            'slug' => 'editor',
            'name' => 'Editor',
            'permissions' => [
                'acl.roles.show' => true,
                'acl.users.show' => true,
                'models.app-models-brand.show' => true,
                'models.app-models-brand.edit' => true,
                'models.app-models-brand.create' => true,
                'models.app-models-category.show' => true,
                'models.app-models-category.edit' => true,
                'models.app-models-category.create' => true,
                'models.app-models-product.show' => true,
                'models.app-models-product.edit' => true,
                'models.app-models-product.create' => true,
                'models.app-models-product.delete' => true,
                'models.app-models-variant.show' => true,
                'models.app-models-variant.edit' => true,
                'models.app-models-variant.create' => true,
                'models.app-models-variant.delete' => true,
            ],
        ]);
        $editorRole->save();

        $guestRole = new \Czim\CmsAuth\Sentinel\Roles\EloquentRole([
            'slug' => 'guest',
            'name' => 'Guest',
            'permissions' => [
                'models.app-models-brand.show' => true,
                'models.app-models-brand.create' => true,
                'models.app-models-category.show' => true,
                'models.app-models-product.show' => true,
                'models.app-models-variant.show' => true,
            ],
        ]);
        $guestRole->save();

        // Assign roles to users
        $admin->roles()->sync([ $adminRole->id ]);
        $editor->roles()->sync([ $editorRole->id ]);
        $guest->roles()->sync([ $guestRole->id ]);
    }

}
