// Exact copy except import UserService from core
import {OnInit, Component, Input, Output, OnChanges, EventEmitter,ElementRef} from '@angular/core';

import { FormBuilder, FormGroup, FormControl } from '@angular/forms';

import { Router, ActivatedRoute, Params } from '@angular/router';
import { SatelliteService } from './../services/satellite-service';

import { Satellite } from './../models/satellite';


@Component({
  selector: 'satellite-single-edit-component',
   templateUrl: 'templates/satellite-single-edit.component.html'
})
export class SatelliteSingleEditComponent implements OnInit{
	private satellite_id : number;
	satellite_form : FormGroup;
	

	constructor(private route: ActivatedRoute,private fb: FormBuilder, private satelliteService: SatelliteService){}



	submit()
	{
		this.satelliteService.updateSatellite(this.satellite_id,this.satellite_form.value).subscribe((result:any) =>{
			UIkit.notify('Satellite Updated');
		},
		(errors: any) =>{
			UIkit.notify('Failed to Update');

		});
		
	}

	ngOnInit() {
		this.satellite_form = this.fb.group({
			'content' :'',
			'mass' :'',
			'cubesat_type' : '',
			'COSPAR' :'',
			'launch_vehicle' :'',
			'launch_date' :'',
			'tle' :'',
			'satcat' :'',
		});

		this.route.parent.params.subscribe(params => {
			this.satellite_id = +params['id'];
	       	this.satelliteService.getSatellite(+params['id']).subscribe((satellite:Satellite) =>{
			this.satellite_form.setValue({
						'content' : satellite.content,
						'mass' : satellite.mass,
						'cubesat_type' : satellite.type.name,
						'launch_vehicle' : satellite.launch.vehicle.name,
						'launch_date' :satellite.launch.launch_date,
						'tle' : satellite.orbit.tle,
						'satcat' : satellite.orbit.satcat,
						'COSPAR' : satellite.orbit.COSPAR,
				});
				},(error: any)=>{

				});

		});


	}

}


