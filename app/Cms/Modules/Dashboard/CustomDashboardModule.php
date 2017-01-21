<?php
namespace App\Cms\Modules\Dashboard;

use Czim\CmsCore\Contracts\Modules\Data\AclPresenceInterface;
use Czim\CmsCore\Contracts\Modules\Data\MenuPresenceInterface;
use Czim\CmsCore\Contracts\Modules\ModuleInterface;
use Czim\CmsCore\Support\Enums\AclPresenceType;
use Czim\CmsCore\Support\Enums\MenuPresenceType;
use Illuminate\Routing\Router;

class CustomDashboardModule implements ModuleInterface
{

    /**
     * Returns unique identifying key for the module.
     * This should also be able to perform as a slug for it.
     *
     * @return string
     */
    public function getKey()
    {
        return 'example-custom-dashboard';
    }

    /**
     * Returns display name for the module.
     *
     * @return string
     */
    public function getName()
    {
        return 'Custom Dashboard';
    }

    /**
     * Returns release or version number of module.
     *
     * @return string|null
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * Returns the FQN for a class mainly associated with this module.
     *
     * @return string|null
     */
    public function getAssociatedClass()
    {
        return null;
    }

    /**
     * Generates web routes for the module given a contextual router instance.
     * Note that the module is responsible for ACL-checks, including route-based.
     *
     * @param Router $router
     */
    public function mapWebRoutes(Router $router)
    {
        $router->group(
            [
                'prefix'    => 'dashboard',
                'as'        => 'dashboard.',
            ],
            function (Router $router) {

                $router->get('/', [
                    'as'   => 'index',
                    'uses' => DashboardWebController::class . '@index',
                ]);

                $router->get('admin', [
                    'as'         => 'admin',
                    'middleware' => [cms_mw_permission("dashboard.admin")],
                    'uses'       => DashboardWebController::class . '@admin',
                ]);
            }
        );
    }

    /**
     * Generates API routes for the module given a contextual router instance.
     * Note that the module is responsible for ACL-checks, including route-based.
     *
     * @param Router $router
     */
    public function mapApiRoutes(Router $router)
    {
        // no api routes (yet)
    }

    /**
     * @return null|array|AclPresenceInterface|AclPresenceInterface[]
     */
    public function getAclPresence()
    {
        return [
            [
                'id'          => 'custom-dashboard',
                'label'       => 'Admin Dashboard',
                'type'        => AclPresenceType::GROUP,
                'permissions' => [
                    "dashboard.admin",
                ],
            ],
        ];
    }

    /**
     * Returns data for CMS menu presence.
     *
     * @return null|array|MenuPresenceInterface[]|MenuPresenceInterface[]
     */
    public function getMenuPresence()
    {
        return [
            'id'     => 'dashboard.index',
            'label'  => 'Dashboard',
            'type'   => MenuPresenceType::ACTION,
            'action' => 'cms::dashboard.index',
        ];
    }
}
