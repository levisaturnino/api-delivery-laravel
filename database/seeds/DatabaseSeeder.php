<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CustomFieldsTableSeeder::class);
        $this->call(CustomFieldValuesTableSeeder::class);
        $this->call(AppSettingsTableSeeder::class);
        $this->call(FieldsTableSeeder::class);
        $this->call(MarketsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(FaqCategoriesTableSeeder::class);
        $this->call(OrderStatusesTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(OptionGroupsTableSeeder::class);

        $this->call(ProductsTableSeeder::class);
        $this->call(GalleriesTableSeeder::class);
        $this->call(ProductReviewsTableSeeder::class);
        $this->call(MarketReviewsTableSeeder::class);
        $this->call(PaymentsTableSeeder::class);
        $this->call(DeliveryAddressesTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(CartsTableSeeder::class);
        $this->call(OptionsTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(FavoritesTableSeeder::class);

        $this->call(ProductOrdersTableSeeder::class);
        $this->call(CartOptionsTableSeeder::class);
        $this->call(UserMarketsTableSeeder::class);
        $this->call(DriverMarketsTableSeeder::class);
        $this->call(ProductOrderOptionsTableSeeder::class);
        $this->call(FavoriteOptionsTableSeeder::class);
        $this->call(MarketFieldsTableSeeder::class);

        $this->call(RolesTableSeeder::class);
        $this->call(DemoPermissionsPermissionsTableSeeder::class);
        $this->call(ModelHasPermissionsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);

        $this->call(MediaTableSeeder::class);
        $this->call(UploadsTableSeeder::class);
        $this->call(DriversTableSeeder::class);
        $this->call(EarningsTableSeeder::class);
        $this->call(DriversPayoutsTableSeeder::class);
        $this->call(MarketsPayoutsTableSeeder::class);
    }

/*
 * php artisan iseed currencies,custom_fields,custom_field_values,delivery_addresses,drivers,drivers_payouts,driver_markets,earnings,options,faqs,faq_categories,favorites,favorite_options,products,product_orders,product_order_options,product
_reviews,galleries,media,migrations,model_has_permissions,model_has_roles,notifications,nutrition,orders,order_statuses,password_resets,payments,permissions,markets,markets_payouts,market_reviews,roles,role_has_permissions,uploads,user_markets

php artisan iseed model_has_permissions,permissions
 */
}
