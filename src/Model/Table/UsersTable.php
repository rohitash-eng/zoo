<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\Rule\IsUnique;
use App\ORM\Rule\IsUniqueWithNulls;
use App\Model\Validation;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
Configure::load('success_error_msg');

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{
    public $customValidator;
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
       $validator->provider('Custom', $this->customValidator);
       

        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->notEmpty('first_name','This field is required.')
            ->ascii('first_name')        
            ->add('first_name', [
                'maxLength' => [
                    'rule' => ['maxLength', 30],
                    'message' => 'Please enter less than 30 characters.'
                ]
            ]);

        /*$validator
            ->add('first_name', 'first_name', [
                'rule' => 'validText',
                'provider' => 'Custom',
            ]);*/


        $validator
            ->notEmpty('last_name','This field is required.')
            ->add('last_name', [
                'maxLength' => [
                    'rule' => ['maxLength', 30],
                    'message' => 'Please enter less than 30 characters.'
                ]]);
           

        $validator
            ->email('email')            
            ->notEmpty('email','This field is required.')
            ->add('email', [
                'maxLength' => [
                    'rule' => ['maxLength', 80],
                    'message' => 'Email id must be less than 80 characters.'
                ]])
            ->add('email', ['unique' => 
                                ['rule' => 'validateUnique',
                                       'provider' => 'table', 
                                        'message' => 'Email id already registered.']
                ]);
        /*$validator
            ->email('confirm_email')
            ->notEmpty('confirm_email','This field is required.')
            ->add('confirm_email', [
                'maxLength' => [
                    'rule' => ['maxLength', 128],
                    'message' => 'Email is too long'
                ]])
            ->add('confirm_email', 'match_email', [
                                    'rule' => ['compareWith', 'email'],
                                    'message' => ('Email id and confirm email id do not match.'),
                ]);*/


        $validator
            ->notEmpty('password','This field is required.');
        $validator
                ->add('password', [
                    'minLength' => [
                        'rule' => ['minLength', 6],
                        'last' => true,
                        'message' => 'Password must be 6 characters long.'
                    ],
                    'maxLength' => [
                        'rule' => ['maxLength', 255],
                        'message' => 'Please enter less than 255 characters.'
                    ]
                ]);
            
    $validator
            ->notEmpty('confirm_password','This field is required.')
            ->add('confirm_password', [
                    'minLength' => [
                        'rule' => ['minLength', 6],
                        'last' => true,
                        'message' => 'Password must be 6 characters long.'
                    ],
                    'maxLength' => [
                        'rule' => ['maxLength', 255],
                        'message' => 'Please enter less than 255 characters.'
                    ]
                ])
            ->add('confirm_password', 'match_password', [
                                    'rule' => ['compareWith', 'password'],
                                    'message' => ('Password and confirm password do not match.'),
                ]);
        $validator
            ->add('password', 'passwordRule', [
            'rule' => function ($value, $provider) {
                if ($value == $provider['data']['email']) {
                    return false;
                }
                return true;
            },
            'message' => __('Email id can not be your password.')
        ]);

        $validator
            ->add('confirm_password', 'passwordRule', [
            'rule' => function ($value, $provider) {
                if ($value == $provider['data']['email']) {
                    return false;
                }
                return true;
            },
            'message' => __('Email id can not be your password.')
        ]);    

        /*$validator
            ->notEmpty('contact_no','This field is required.')
            ->add('contact_no', [
                    'maxLength' => [
                        'rule' => ['maxLength', 12],
                        'message' => 'Please enter valid phone number.'
                    ]]);*/
        /*$validator
            -> add('contact_no', 'contact_no', [
                'rule' => 'phone',
                'provider' => 'Custom',
                ]);*/
        /*$validator
            ->add('is_agree', 'is_agree', [
            'rule' => function ($value, $provider) {
                if ($value == 0) {
                    return false;
                }
                return true;
            },
            'message' => __('Please check Terms & Conditions and Privacy Policy.')
        ]);*/

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
    public function validationLogin(Validator $validator) {
        $msg = Configure::read('ModelMsg');
        $validator
                ->requirePresence('password')
                ->notEmpty('password', $msg['required'])
                ->requirePresence('email')
                ->notEmpty('email',$msg['required'])
                ->add('email', 'valid', [
                    'rule' => 'email',
                    'message' => $msg['validEmail']
                ]);
        return $validator;
    }
}
