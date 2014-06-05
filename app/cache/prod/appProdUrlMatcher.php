<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/liens')) {
                // admin_liens_create
                if ($pathinfo === '/admin/liens/create') {
                    return array (  '_controller' => 'Vae\\AdminBundle\\Controller\\LiensController::createAction',  '_route' => 'admin_liens_create',);
                }

                // admin_liens_update
                if (preg_match('#^/admin/liens/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_liens_update')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\LiensController::updateAction',));
                }

                // admin_liens_delete
                if (preg_match('#^/admin/liens/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_liens_delete')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\LiensController::deleteAction',));
                }

                // admin_liens_index
                if (preg_match('#^/admin/liens(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_liens_index')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\LiensController::indexAction',  'page' => 1,));
                }

                // admin_liens_index_add
                if (0 === strpos($pathinfo, '/admin/liens/add/page') && preg_match('#^/admin/liens/add/page(?:_(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_liens_index_add')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\LiensController::index_addAction',  'page' => 1,));
                }

                // admin_liens_index_update
                if (0 === strpos($pathinfo, '/admin/liens/update') && preg_match('#^/admin/liens/update_(?P<id>\\d+)/page(?:_(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_liens_index_update')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\LiensController::index_updateAction',  'page' => 1,));
                }

            }

            if (0 === strpos($pathinfo, '/admin/agendas')) {
                // admin_agendas_create
                if ($pathinfo === '/admin/agendas/create') {
                    return array (  '_controller' => 'Vae\\AdminBundle\\Controller\\AgendasController::createAction',  '_route' => 'admin_agendas_create',);
                }

                // admin_agendas_update
                if (preg_match('#^/admin/agendas/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_agendas_update')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\AgendasController::updateAction',));
                }

                // admin_agendas_delete
                if (preg_match('#^/admin/agendas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_agendas_delete')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\AgendasController::deleteAction',));
                }

                // admin_agendas_index
                if (preg_match('#^/admin/agendas(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_agendas_index')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\AgendasController::indexAction',  'page' => 1,));
                }

                // admin_agendas_index_add
                if (0 === strpos($pathinfo, '/admin/agendas/add/page') && preg_match('#^/admin/agendas/add/page(?:_(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_agendas_index_add')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\AgendasController::index_addAction',  'page' => 1,));
                }

                // admin_agendas_index_update
                if (0 === strpos($pathinfo, '/admin/agendas/update') && preg_match('#^/admin/agendas/update_(?P<id>\\d+)/page(?:_(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_agendas_index_update')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\AgendasController::index_updateAction',  'page' => 1,));
                }

            }

            if (0 === strpos($pathinfo, '/admin/con')) {
                if (0 === strpos($pathinfo, '/admin/configs')) {
                    // admin_configs_create
                    if ($pathinfo === '/admin/configs/create') {
                        return array (  '_controller' => 'Vae\\AdminBundle\\Controller\\ConfigsController::createAction',  '_route' => 'admin_configs_create',);
                    }

                    // admin_configs_update
                    if (preg_match('#^/admin/configs/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_configs_update')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\ConfigsController::updateAction',));
                    }

                    // admin_configs_delete
                    if (preg_match('#^/admin/configs/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_configs_delete')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\ConfigsController::deleteAction',));
                    }

                    // admin_configs_index
                    if (preg_match('#^/admin/configs(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_configs_index')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\ConfigsController::indexAction',  'page' => 1,));
                    }

                    // admin_configs_index_add
                    if (0 === strpos($pathinfo, '/admin/configs/add/page') && preg_match('#^/admin/configs/add/page(?:_(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_configs_index_add')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\ConfigsController::index_addAction',  'page' => 1,));
                    }

                    // admin_configs_index_update
                    if (0 === strpos($pathinfo, '/admin/configs/update') && preg_match('#^/admin/configs/update_(?P<id>\\d+)/page(?:_(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_configs_index_update')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\ConfigsController::index_updateAction',  'page' => 1,));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/contacts')) {
                    // admin_contacts_create
                    if ($pathinfo === '/admin/contacts/create') {
                        return array (  '_controller' => 'Vae\\AdminBundle\\Controller\\ContactsController::createAction',  '_route' => 'admin_contacts_create',);
                    }

                    // admin_contacts_update
                    if (preg_match('#^/admin/contacts/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contacts_update')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\ContactsController::updateAction',));
                    }

                    // admin_contacts_delete
                    if (preg_match('#^/admin/contacts/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contacts_delete')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\ContactsController::deleteAction',));
                    }

                    // admin_contacts_index
                    if (preg_match('#^/admin/contacts(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contacts_index')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\ContactsController::indexAction',  'page' => 1,));
                    }

                    // admin_contacts_index_add
                    if (0 === strpos($pathinfo, '/admin/contacts/add/page') && preg_match('#^/admin/contacts/add/page(?:_(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contacts_index_add')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\ContactsController::index_addAction',  'page' => 1,));
                    }

                    // admin_contacts_index_update
                    if (0 === strpos($pathinfo, '/admin/contacts/update') && preg_match('#^/admin/contacts/update_(?P<id>\\d+)/page(?:_(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contacts_index_update')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\ContactsController::index_updateAction',  'page' => 1,));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/formations')) {
                // admin_formations_create
                if ($pathinfo === '/admin/formations/create') {
                    return array (  '_controller' => 'Vae\\AdminBundle\\Controller\\FormationsController::createAction',  '_route' => 'admin_formations_create',);
                }

                // admin_formations_update
                if (preg_match('#^/admin/formations/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_formations_update')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\FormationsController::updateAction',));
                }

                // admin_formations_delete
                if (preg_match('#^/admin/formations/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_formations_delete')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\FormationsController::deleteAction',));
                }

                // admin_formations_index
                if (preg_match('#^/admin/formations(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_formations_index')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\FormationsController::indexAction',  'page' => 1,));
                }

                // admin_formations_index_add
                if (0 === strpos($pathinfo, '/admin/formations/add/page') && preg_match('#^/admin/formations/add/page(?:_(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_formations_index_add')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\FormationsController::index_addAction',  'page' => 1,));
                }

                // admin_formations_index_update
                if (0 === strpos($pathinfo, '/admin/formations/update') && preg_match('#^/admin/formations/update_(?P<id>\\d+)/page(?:_(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_formations_index_update')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\FormationsController::index_updateAction',  'page' => 1,));
                }

            }

            if (0 === strpos($pathinfo, '/admin/produits')) {
                // admin_produits_create
                if ($pathinfo === '/admin/produits/create') {
                    return array (  '_controller' => 'Vae\\AdminBundle\\Controller\\ProduitsController::createAction',  '_route' => 'admin_produits_create',);
                }

                // admin_produits_update
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produits_update')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\ProduitsController::updateAction',));
                }

                // admin_produits_delete
                if (preg_match('#^/admin/produits/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produits_delete')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\ProduitsController::deleteAction',));
                }

                // admin_produits_index
                if (preg_match('#^/admin/produits(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produits_index')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\ProduitsController::indexAction',  'page' => 1,));
                }

                // admin_produits_index_add
                if (0 === strpos($pathinfo, '/admin/produits/add/page') && preg_match('#^/admin/produits/add/page(?:_(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produits_index_add')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\ProduitsController::index_addAction',  'page' => 1,));
                }

                // admin_produits_index_update
                if (0 === strpos($pathinfo, '/admin/produits/update') && preg_match('#^/admin/produits/update_(?P<id>\\d+)/page(?:_(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_produits_index_update')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\ProduitsController::index_updateAction',  'page' => 1,));
                }

            }

            if (0 === strpos($pathinfo, '/admin/users')) {
                // admin_users_create
                if ($pathinfo === '/admin/users/create') {
                    return array (  '_controller' => 'Vae\\AdminBundle\\Controller\\UsersController::createAction',  '_route' => 'admin_users_create',);
                }

                // admin_users_update
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_update')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\UsersController::updateAction',));
                }

                // admin_users_delete
                if (preg_match('#^/admin/users/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_delete')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\UsersController::deleteAction',));
                }

                // admin_users_index
                if (preg_match('#^/admin/users(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_index')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\UsersController::indexAction',  'page' => 1,));
                }

                // admin_users_index_add
                if (0 === strpos($pathinfo, '/admin/users/add/page') && preg_match('#^/admin/users/add/page(?:_(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_index_add')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\UsersController::index_addAction',  'page' => 1,));
                }

                // admin_users_index_update
                if (0 === strpos($pathinfo, '/admin/users/update') && preg_match('#^/admin/users/update_(?P<id>\\d+)/page(?:_(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_index_update')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\UsersController::index_updateAction',  'page' => 1,));
                }

            }

            if (0 === strpos($pathinfo, '/admin/achats')) {
                // admin_achats_delete
                if (preg_match('#^/admin/achats/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_achats_delete')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\AchatsController::deleteAction',));
                }

                // admin_achats_index
                if (preg_match('#^/admin/achats(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_achats_index')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\AchatsController::indexAction',  'page' => 1,));
                }

            }

            if (0 === strpos($pathinfo, '/admin/inscriptions')) {
                // admin_inscriptions_update
                if (preg_match('#^/admin/inscriptions/(?P<id>[^/\\-]++)\\-(?P<id2>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inscriptions_update')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\InscriptionsController::updateAction',));
                }

                // admin_inscriptions_delete
                if (preg_match('#^/admin/inscriptions/(?P<id>[^/\\-]++)\\-(?P<id2>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inscriptions_delete')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\InscriptionsController::deleteAction',));
                }

                // admin_inscriptions_index
                if (preg_match('#^/admin/inscriptions(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_inscriptions_index')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\InscriptionsController::indexAction',  'page' => 1,));
                }

            }

            // admin_rubriques_create
            if ($pathinfo === '/admin/create') {
                return array (  '_controller' => 'Vae\\AdminBundle\\Controller\\RubriquesController::createAction',  '_route' => 'admin_rubriques_create',);
            }

            // admin_rubriques_update
            if (preg_match('#^/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rubriques_update')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\RubriquesController::updateAction',));
            }

            // admin_rubriques_delete
            if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rubriques_delete')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\RubriquesController::deleteAction',));
            }

            // admin_rubriques_index
            if (preg_match('#^/admin(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rubriques_index')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\RubriquesController::indexAction',  'page' => 1,));
            }

            // admin_rubriques_index_add
            if (0 === strpos($pathinfo, '/admin/add/page') && preg_match('#^/admin/add/page(?:_(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rubriques_index_add')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\RubriquesController::index_addAction',  'page' => 1,));
            }

            // admin_rubriques_index_update
            if (0 === strpos($pathinfo, '/admin/update') && preg_match('#^/admin/update_(?P<id>\\d+)/page(?:_(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rubriques_index_update')), array (  '_controller' => 'Vae\\AdminBundle\\Controller\\RubriquesController::index_updateAction',  'page' => 1,));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // fos_user_security_check
            if ($pathinfo === '/login_check') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

            // fos_user_security_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // vae_multi_site_accueil
        if (preg_match('#^/(?P<_locale>[^/]++)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vae_multi_site_accueil')), array (  '_controller' => 'Vae\\MultiSiteBundle\\Controller\\SiteController::indexAction',  '_locale' => 'fr',));
        }

        // vae_base_agenda_agenda
        if (preg_match('#^/(?P<_locale>fr|en)/(?P<nomSite>[^/]++)/agenda$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vae_base_agenda_agenda')), array (  '_controller' => 'Vae\\BaseBundle\\Controller\\AgendaController::agendaAction',  '_locale' => 'fr',));
        }

        // vae_base_rubrique_detail
        if (preg_match('#^/(?P<_locale>fr|en)/(?P<nomSite>[^/]++)/(?P<slugRubrique>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vae_base_rubrique_detail')), array (  '_controller' => 'Vae\\BaseBundle\\Controller\\RubriqueController::detailAction',  '_locale' => 'fr',));
        }

        // vae_base_agenda_detail
        if (preg_match('#^/(?P<_locale>fr|en)/(?P<nomSite>[^/]++)/(?P<slugAgenda>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'vae_base_agenda_detail');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vae_base_agenda_detail')), array (  '_controller' => 'Vae\\BaseBundle\\Controller\\AgendaController::detailAction',  '_locale' => 'fr',));
        }

        // vae_base_formation_contact_send
        if (preg_match('#^/(?P<_locale>fr|en)/(?P<nomSite>[^/]++)/(?P<slugRubrique>[^/]++)/send$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vae_base_formation_contact_send')), array (  '_controller' => 'Vae\\BaseBundle\\Controller\\ContactController::formAction',  '_locale' => 'fr',));
        }

        // vae_base_formation_detail
        if (preg_match('#^/(?P<_locale>fr|en)/(?P<nomSite>[^/]++)/(?P<slugRubrique>[^/]++)/(?P<slugFormation>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vae_base_formation_detail')), array (  '_controller' => 'Vae\\BaseBundle\\Controller\\FormationController::detailAction',  '_locale' => 'fr',));
        }

        // vae_boutique_detail
        if (preg_match('#^/(?P<_locale>fr|en)/(?P<nomSite>[^/]++)/(?P<slugRubrique>[^/]++)/(?P<slugProduit>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'vae_boutique_detail');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vae_boutique_detail')), array (  '_controller' => 'Vae\\BoutiqueBundle\\Controller\\ProduitController::detailAction',  '_locale' => 'fr',));
        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/paypal')) {
                // vae_boutique_process
                if ($pathinfo === '/paypal/process') {
                    return array (  '_controller' => 'Vae\\BoutiqueBundle\\Controller\\ProduitController::processAction',  'langue' => 'fr',  '_route' => 'vae_boutique_process',);
                }

                // vae_boutique_cancel
                if ($pathinfo === '/paypal/cancel') {
                    return array (  '_controller' => 'Vae\\BoutiqueBundle\\Controller\\ProduitController::cancelAction',  'langue' => 'fr',  '_route' => 'vae_boutique_cancel',);
                }

            }

            // vae_inscription_delete
            if (0 === strpos($pathinfo, '/profile/delete') && preg_match('#^/profile/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vae_inscription_delete')), array (  '_controller' => 'Vae\\InscriptionBundle\\Controller\\InscriptionController::deleteAction',  '_locale' => 'fr',));
            }

        }

        // vae_inscription_formation
        if (preg_match('#^/(?P<_locale>fr|en)/(?P<nomSite>[^/]++)/(?P<slugRubrique>[^/]++)/(?P<slugFormation>[^/]++)/inscription$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'vae_inscription_formation')), array (  '_controller' => 'Vae\\InscriptionBundle\\Controller\\InscriptionController::inscriptionAction',  '_locale' => 'fr',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
