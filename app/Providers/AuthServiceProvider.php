<?php

namespace App\Providers;

use App\Entities\Experience;
use App\Entities\Jobseeker;
use App\Entities\Resume;
use App\Entities\Company;
use App\Entities\Job;
use App\Entities\Study;
use App\Entities\User;
use App\Policies\ExperiencePolicy;
use App\Policies\ResumePolicy;
use App\Policies\CompanyPolicy;
use App\Policies\JobPolicy;
use App\Policies\StudyPolicy;
use App\Policies\UserPolicy;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Resume::class       => ResumePolicy::class,
        Company::class      => CompanyPolicy::class,
        Job::class          => JobPolicy::class,
        Study::class        => StudyPolicy::class,
        Experience::class   => ExperiencePolicy::class,
        User::class         => UserPolicy::class
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        //
    }
}
