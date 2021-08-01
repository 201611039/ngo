<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::updateOrCreate([
            'branch_id' => 1
        ], [
            'general_info' => '<p>Organizations was registered on 13th NOVEMBER 2013, with Registration No: OONGO/00006550 as a National wide non-governmental, voluntary  and non-profit making organization Established under the NGO’s laws of Tanzania. THE ORGANIZATION Was founded by MEMBER OF NGO’S , who is a specialist in teaching children with disabilitie/special needs, under his leadership and expertise the organization is working hard to ensure children with disabilities/special needs are receive all support services essential to enable them access to primary school and acquire necessary supporting facilities such as wheel chair .Currently we are working with more than 0ver 500 children orphans and children with different disability in six special needs school in Mbeya such school are ( Ikuti, Itiji, Ilemi, Kilimo Mwenge and Insalaga).</p>',

            'mission' => '<p>
                                    Tanzanian children and young people with disabilities and the under privileged are able to achieve their full potential and have access to equal rights in an inclusive society.
                                </p>',
            'value' => '<h3>
                        We are committed to;
                    </h3>
                    <p>
                        Valuing and realizing the potential of children and young people with disabilities and the under privileged
                    </p>

                    <h4>
                        Motto
                    </h4>
                    <p>
                        We stand for orphans and disabled children
                    </p>
                    <h4>
                        Slogan:
                    </h4>

                    <p>
                        “Children First”
                    </p>',
            'vision' => '<p>
                            To promote and raise awareness of the rights of children and young people with disabilities and the under privileged children and to facilitate access to quality inclusive education
                        </p>',
        ]);
    }
}
