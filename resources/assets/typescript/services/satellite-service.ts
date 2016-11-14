import { Injectable }     from '@angular/core';
import { Http, Response } from '@angular/http';

import {Pagination} from "./../models/pagination";
import {Satellite} from "./../models/satellite";

import {Observable}     from 'rxjs/Rx';
import {ApiService} from "./api-service";
import { Headers, RequestOptions } from '@angular/http';
@Injectable()
export class SatelliteService extends ApiService{
	constructor( http: Http ) { 
		super(http);

	}

	getSatellites(payload:any){
		let headers = new Headers({ 'Content-Type': 'application/json' });
		let options = new RequestOptions({ headers: headers });

		return this.http.get(SatelliteService.API + "/",payload)
			.map(request => <Pagination<Satellite>>request.json())
			.catch(this.handleError);
	}
	getSatellite(satellite_id:number){
		let headers = new Headers({ 'Content-Type': 'application/json' });
		let options = new RequestOptions({ headers: headers });
		
		return this.http.get(SatelliteService.API + "/id=" + satellite_id)
			.map(request => <Pagination<Satellite>>request.json())
			.catch(this.handleError);
	

	}

}

