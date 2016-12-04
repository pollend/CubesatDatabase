import { Injectable }     from '@angular/core';
import { Http, Response } from '@angular/http';
import { Headers, RequestOptions } from '@angular/http';
import {Observable}     from 'rxjs/Rx';

import {ApiService} from "./api-service";
import {UserService} from "./user-service";


import {Pagination} from "./../models/pagination";
import {SatelliteFlat} from "./../models/satellite_flat";
import {Satellite} from "./../models/satellite";





@Injectable()
export class SatelliteService extends ApiService{
	constructor( http: Http, private userservice: UserService) { 
		super(http);
		
	}

	updateSatellite(satellite_id : number,payload:any) : Observable<any>{
		let headers = new Headers({ 'Content-Type': 'application/json' });
		let options = new RequestOptions({ headers: headers });

		this.userservice.ApplyTokenToHeader(options);

		return this.http.post(SatelliteService.API + "/satellite/"+satellite_id +"/edit",payload,options).map(this.extractData);
	}


	getSatellites(payload:any) : Observable<Pagination<SatelliteFlat>> {
		let headers = new Headers({ 'Content-Type': 'application/json' });
		let options = new RequestOptions({ headers: headers });

		return this.http.post(SatelliteService.API + "/satellite",payload,options)
		.map(this.extractData);
	}

	getSatellitesByOrganization(organization_id:number) : Observable<Pagination<SatelliteFlat>>
	{
		return this.http.get(SatelliteService.API + "/satellite/organization/" + organization_id)
		.map(this.extractData);
	}

	getSatellite(satellite_id:number) : Observable<Satellite> {
		return this.http.get(SatelliteService.API + "/satellite/" + satellite_id )
		.map(this.extractData);
	}

}

