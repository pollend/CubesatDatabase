// Exact copy except import UserService from core
import { Component, OnInit }      from '@angular/core';

import { FormBuilder, FormGroup,FormArray } from '@angular/forms';
import { Router } from '@angular/router';

import {Pagination} from "../models/pagination";
import {MissionFlat} from "../models/mission_flat";
import {SatelliteFlat} from "../models/satellite_flat";


import {MissionService} from "../services/mission-service";
import {SatelliteService} from "../services/satellite-service";


@Component({
  selector: 'mission-list',
  templateUrl: 'templates/mission-list.component.html',
  styles : [
	'.mission-subsection {padding-left:15px;}',
	'.mission-entry { margin-top: 5px; padding-top: 5px; border-top: 1px solid #E5E5E5;'
  ]
})

export class MissionListComponent {
	private payload: Pagination<MissionFlat>;


	constructor(private satelliteService: SatelliteService,private missionService: MissionService,private  fb: FormBuilder){
		this.search({});
	}


	search(payload : any):void{

		this.missionService.getMissions(payload).subscribe((resp: Pagination<MissionFlat>) => {
			this.payload = resp;
		}, (errors:any) => {

		})
	}

	onMissionPageChange(page)
	{
		this.search({page: page});
	}

	getMissionEntry(mission_entry)
	{
		
	}

	onSatellitePageChange(page,entry: MissionFlat)
	{
		this.updateSatellites(entry,page);
	}

	toggleSatelliteList(entry: MissionFlat)
	{
		entry['satellite_visible'] = !entry['satellite_visible'];
		if(entry['satellite_visible'])
		{
			let page = 0;
			if(entry['satellites'])
			{
				page = entry['satellites'].current_page;	
			}

			this.updateSatellites(entry,0);
		}
	}

	updateSatellites(entry:MissionFlat,page:number)
	{

			this.satelliteService.getSatellitesByOrganization(entry.organization_id).subscribe((resp : Pagination<SatelliteFlat> ) =>{
				entry['satellites'] = resp

			},(errors: any) =>{

			});
	}

}