
// Exact copy except import UserService from core
import { Component, OnInit }      from '@angular/core';
import {VendorService} from "./../services/vendor-service";

import  {Vendor} from "./../models/vendor";


@Component({
  selector: 'vendor-list',
  templateUrl: 'templates/vendor-list.component.html',
  styles: ['.vendor-item{margin-bottom:5px;}']
})
export class VendorListComponent {
	private vendors : Vendor[];
	constructor(private vendorService: VendorService){
		vendorService.getVendors().subscribe((resp : Vendor[])=>{
			this.vendors = resp;
		}, (error : any)=>{

		});
	}

}