// Exact copy except import UserService from core
import {OnInit, Component, Input, Output, OnChanges, EventEmitter} from '@angular/core';


import { FormBuilder, FormGroup, FormControl } from '@angular/forms';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { SatelliteService } from './../services/satellite-service';

import { Satellite } from './../models/satellite';



@Component({
  selector: 'satellite-form-component',
  templateUrl: 'templates/satellite-form.component.html'
})
export class SatelliteFormComponent implements OnInit{
	satellite_form : FormGroup;
	private _satellite_id: number;


	@Input()
	set satelliteId(id : number)
	{

		this.satelliteForm();
		this._satellite_id = id;
		this.satelliteService.getSatellite(this._satellite_id).subscribe((satellite:Satellite) =>{
			this.satellite_form.setValue({
					'content' : satellite.content,
					'mass' : satellite.mass,
					'cubesat_type' : satellite.satellite_type.name,
					'COSPAR' : satellite.COSPAR,
					'launch_vehicle' : satellite.launch.launch_vehicle.name,
					'launch_date' :satellite.launch.launch_date,
					'tle' : satellite.orbit.tle,
					'orbit' : satellite.orbit.orbit,
			});
		},(error: any)=>{

		});
	}

	@Output() 
	result: EventEmitter<Satellite> = new EventEmitter<Satellite>();

	constructor(private route: ActivatedRoute,private fb: FormBuilder, private satelliteService: SatelliteService){
	}

	ngOnInit() {
		this.satelliteForm();
	}

	satelliteForm() : void{
		this.satellite_form = this.fb.group({
			'content' :'',
			'mass' :'',
			'cubesat_type' : '',
			'COSPAR' :'',
			'launch_vehicle' :'',
			'launch_date' :'',
			'tle' :'',
			'orbit' :'',
		});
	}
}


