<?php

use Illuminate\Database\Seeder;
use App\Supplier;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier1 = new Supplier;
        $supplier1->nama_supplier ="KEpo";
        $supplier1->alamat_supplier = "skh";
        $supplier1->telp_supplier = "987654";
        $supplier1->save();

        $supplier2 = new Supplier;
        $supplier2->nama_supplier ="AKU ";
        $supplier2->alamat_supplier = "SOC";
        $supplier2->telp_supplier = "12345";
        $supplier2->save();

    }
}
