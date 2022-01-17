<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TableViewTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testRenderTableView()
    {
        $this->browse(function (Browser $browser) {
            $users = User::factory(10)->create();
            $browser->visit(route('page', 'table-view-with-inline-editing'));
            foreach ($users as $user) {
                $browser->assertSee($user->name)
                    ->assertSee($user->email);
            }
        });
    }

    public function testSearchBar()
    {
        $this->browse(function (Browser $browser) {
            /** @var User */
            $user = User::factory()->create();
            $users = User::factory(9)->create();

            $browser->visit(route('page', 'table-view-with-inline-editing'))
                ->type('input[placeholder="Search"]', $user->name)
                ->pause(200)
                ->assertSee($user->name);

            foreach ($users as $userInTable) {
                $browser->assertDontSee($userInTable->name);
            }
        });
    }

    public function testFiltersDropdown()
    {
        $this->browse(function (Browser $browser) {
            User::factory(10)->create();
            $inactiveUsers = User::where('active', '!=', true)->get();
            $activeUsers = User::whereActive(true)->get();

            $browser->visit(route('page', 'table-view-with-inline-editing'))
                ->press('Filters')
                ->select('filters[users-active-filter]', 1)
                ->pause(200);

            foreach ($inactiveUsers as $user) {
                $browser->assertDontSee($user->name);
            }
            foreach ($activeUsers as $user) {
                $browser->assertSee($user->name);
            }
        });
    }
}
