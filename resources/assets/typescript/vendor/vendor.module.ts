import { NgModule } from '@angular/core';
import {VendorRoutingModule} from "./vendor-routing.module";
import {CommonModule }   from '@angular/common';
import {ShareModule} from "./../share/share.module";
import {  ReactiveFormsModule }   from '@angular/forms';

import {VendorComponent} from "./vendor.component";
import {VendorListComponent} from "./vendor-list.component";

import {VendorService} from "./../services/vendor-service";



@NgModule({
  imports:      [
	VendorRoutingModule,
	CommonModule,
	ShareModule,
	ReactiveFormsModule
  ],
  declarations: [
	VendorComponent,
	VendorListComponent
  ],
  providers:    [
  VendorService
  ]
})
export class VendorModule { }
