<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ShipperRequest;
use App\Models\Shipper;
use App\Services\ImportAwareTrait;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ShipperCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ShipperCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use ImportAwareTrait;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Shipper::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/shipper');
        CRUD::setEntityNameStrings('shipper', 'shippers');

        $this->crud->addFields([
            [
                'name'=>'ownername',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'dba',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'addressline1',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'addressline2',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'city',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'state',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'zipcode',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'licensenumber',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'licensetype',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'status',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'effectivedate',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'expirationdate',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'lengthoflicense',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'contactname',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'emailaddress',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'contactphone',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'mailingaddressline1',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'mailingaddresscity',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'mailingaddressstate',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'mailingaddresszip',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'issuedate',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
            [
                'name'=>'currentissuedate',
                'label'=>'',
                'type'=>'',
                'importable'=>true,
            ],
        ]);

        $this->crud->addButtonFromView('bottom','import','import','end');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::setFromDb(); // columns
        CRUD::column('ownername');
        CRUD::column('dba');
        CRUD::column('effectivedate');
        CRUD::column('expirationdate');
        CRUD::column('contactname');
        CRUD::column('emailaddress');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ShipperRequest::class);

        CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    public function importSampleFilename()
    {
        return 'sample_permittess.csv';
    }

    public function importInstructions()
    {
        return ['bla bla'];
    }

    public function importValidationRules()
    {
        return [
          'ownername'=>'required',
          'dba'=>'required',
        ];
    }

    public function importValidationMessages()
    {
        return [
            'ownername.required'=> 'bla bla',
            'dba.required'=>'bla bla',
        ];
    }

    public function importCreate( $entity )
    {
        // TODO: Implement importCreate() method.
        return Shipper::create($entity);
    }
}
