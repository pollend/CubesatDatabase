import { NgModule }            from '@angular/core';
import { RouterModule }        from '@angular/router';
import {VendorComponent}       from "./vendor.component";
import {VendorListComponent}   from "./vendor-list.component";



@NgModule({
  imports: [RouterModule.forChild([
	{path:'',component:VendorComponent,
		children: [
			 { path:'' , component: VendorListComponent}
			
		]
	}

  ])],
  exports: [RouterModule]
})
export class VendorRoutingModule {}

