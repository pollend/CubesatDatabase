// Exact copy except import UserService from core
import { Component, OnInit }      from '@angular/core';

import { FormBuilder, FormGroup,FormArray } from '@angular/forms';
import { Router } from '@angular/router';

import {UserService} from "./../services/user-service";
import {SatelliteService} from "./../services/satellite-service";

import {Pagination} from "./../models/pagination";
import {SatelliteFlat} from "./../models/satellite_flat";


@Component({
  selector: 'satellite-list',
  templateUrl: 'templates/satellite-list.component.html'
})

export class SatelliteListComponent {
	simpleSearchForm : FormGroup;
	advanceSearchForm : FormGroup;
	payload: Pagination<SatelliteFlat>;

	constructor(private userService: UserService,private satelliteService: SatelliteService,private router: Router,private  fb: FormBuilder){


		this.simpleSearchForm = this.initSearchEntry();

		this.advanceSearchForm = fb.group({
			'search_entry' : fb.array([
				this.initSearchEntry()
			])
		});
	}

	initSearchEntry(){
		return  this.fb.group({
			'search' :'',
			'column' :''
		});
	}

	addSearchEntry(){
		const control = <FormArray>this.advanceSearchForm.controls['search_entry'];
		control.push(this.initSearchEntry());
	}

	removeEntry(index : number): void
	{
		const control = <FormArray>this.advanceSearchForm.controls['search_entry'];
		control.removeAt(index);
	}

	simpleSearch():void{
		let t = this.simpleSearchForm.value;
	}

	advanceSearch(): void{
		let t = this.advanceSearchForm.value;
	}

	search():void{

		let payload = {pages : 0};
		this.satelliteService.getSatellites(payload).subscribe((resp: Pagination<SatelliteFlat>) => {
			this.payload = resp;
		}, (errors:any) => {

		});
		
	}
}


