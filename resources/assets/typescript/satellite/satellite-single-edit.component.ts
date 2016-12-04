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
	

	constructor(private codeView:ElementRef,private route: ActivatedRoute,private fb: FormBuilder, private satelliteService: SatelliteService){}



	submit()
	{


		let codeMirror = $(<HTMLElement>this.codeView.nativeElement).find(".CodeMirror")[0]["CodeMirror"];

		//var view = $(<HTMLElement>this.codeView.nativeElement).find(".code-view") ;
		this.satellite_form.value["content"] = codeMirror.getValue();// CodeMirror.fromTextArea(<HTMLTextAreaElement>view.get(0)).getValue();

		this.satelliteService.updateSatellite(this.satellite_id,this.satellite_form.value).subscribe((result:any) =>{

		},
		(errors: any) =>{

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
			'orbit' :'',
		});

		this.route.parent.params.subscribe(params => {
			this.satellite_id = +params['id'];
	       	this.satelliteService.getSatellite(+params['id']).subscribe((satellite:Satellite) =>{
			this.satellite_form.setValue({
						'content' : satellite.content,
						'mass' : satellite.mass,
						'cubesat_type' : satellite.type.name,
						'COSPAR' : satellite.COSPAR,
						'launch_vehicle' : satellite.launch.vehicle.name,
						'launch_date' :satellite.launch.launch_date,
						'tle' : satellite.orbit.tle,
						'orbit' : satellite.orbit.orbit,
				});
				},(error: any)=>{

				});

		});


	}

}


