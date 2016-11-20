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
	private simpleSearchForm : FormGroup;
	private advanceSearchForm : FormGroup;
	private payload: Pagination<SatelliteFlat>;
	private previousSearch : any;
	private page : number;

	constructor(private userService: UserService,private satelliteService: SatelliteService,private router: Router,private  fb: FormBuilder){


		this.simpleSearchForm = this.initSearchEntry();

		this.advanceSearchForm = fb.group({
			'search_entry' : fb.array([
				this.initAdvanceSearchEntry()
			])
		});

		this.simpleSearch();
	}

	initSearchEntry(){
		return  this.fb.group({
			'search' :'Name',
			'column' :''
		});
	}

	initAdvanceSearchEntry(){
		return  this.fb.group({
			'search' :'Name',
			'search_type':'Equals',
			'column' :''
		});
	}

	addSearchEntry(){
		const control = <FormArray>this.advanceSearchForm.controls['search_entry'];
		control.push(this.initAdvanceSearchEntry());
	}

	removeEntry(index : number): void
	{
		const control = <FormArray>this.advanceSearchForm.controls['search_entry'];
		control.removeAt(index);
	}

	simpleSearch():void{
		let t = this.simpleSearchForm.value;
		this.search(t);
	}

	advanceSearch(): void{
		let t = this.advanceSearchForm.value;
		this.search(t);
	}

	onPageChange(page)
	{
		this.page = page;
		this.search(undefined);
	}

	search(payload : any):void{

		if(payload == undefined)
		{
			payload = this.previousSearch;
		}
		payload['page'] = this.page;

		this.previousSearch = payload;
		this.satelliteService.getSatellites(payload).subscribe((resp: Pagination<SatelliteFlat>) => {
			this.payload = resp;
		}, (errors:any) => {

		});
		
	}
}


