<?php
/**
 * @license MIT
 * @author Basic App Dev Team
 */
namespace BasicApp\User\Controllers\User;

use BasicApp\User\Models\Admin\UserModel;

abstract class BaseAdmin extends \BasicApp\Admin\AdminCrudController
{

	protected $modelClass = UserModel::class;

	protected $viewPath = 'BasicApp\User\Admin\User';

	protected $returnUrl = 'admin/user';

}