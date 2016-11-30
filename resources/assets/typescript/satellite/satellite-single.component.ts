// Exact copy except import UserService from core
import { Component, OnInit }      from '@angular/core';


import { Router, ActivatedRoute, Params } from '@angular/router';
import { SatelliteService } from './../services/satellite-service';

import { Satellite } from './../models/satellite';



@Component({
  selector: 'satellite-single-component',
  templateUrl: 'templates/satellite-single.component.html'
})
export class SatelliteSingleComponent implements OnInit{
	private satellite: Satellite;

	constructor(private route: ActivatedRoute, private satelliteService: SatelliteService){}

  	ngOnInit() {
		var satellite_id = this.route.params["value"]['id'];
		this.satelliteService.getSatellite(satellite_id).subscribe((satellite: Satellite)=>{
			this.satellite = satellite;

		},(error : any) =>{

		});
		
  	}
}


