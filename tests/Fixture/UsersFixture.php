<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => '1ea9f778-1196-4609-9a28-68cb00bf4085',
                'username' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'first_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'token' => 'Lorem ipsum dolor sit amet',
                'token_expires' => '2021-12-14 19:29:40',
                'api_token' => 'Lorem ipsum dolor sit amet',
                'activation_date' => '2021-12-14 19:29:40',
                'secret' => 'Lorem ipsum dolor sit amet',
                'secret_verified' => 1,
                'tos_date' => '2021-12-14 19:29:40',
                'active' => 1,
                'is_superuser' => 1,
                'role' => 'Lorem ipsum dolor sit amet',
                'created' => '2021-12-14 19:29:40',
                'modified' => '2021-12-14 19:29:40',
                'additional_data' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            ],
        ];
        parent::init();
    }
}
