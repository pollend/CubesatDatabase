import { Injectable }     from '@angular/core';
import { Http, Response } from '@angular/http';
import { Headers, RequestOptions } from '@angular/http';
import {Observable}     from 'rxjs/Rx';

import {ApiService} from "./api-service";

import {Pagination} from "./../models/pagination";
import {SatelliteFlat} from "./../models/satellite_flat";
import {Satellite} from "./../models/satellite";

@Injectable()
export class SatelliteService extends ApiService{
	constructor( http: Http ) { 
		super(http);

	}

	getSatellites(payload:any) : Observable<Pagination<SatelliteFlat>> {
		let headers = new Headers({ 'Content-Type': 'application/json' });
		let options = new RequestOptions({ headers: headers });

		return this.http.get(SatelliteService.API + "/satellite",payload)
		.map(this.extractData);
	}

	getSatellite(satellite_id:number) : Observable<Satellite> {
		let headers = new Headers({ 'Content-Type': 'application/json' });
		let options = new RequestOptions({ headers: headers });
		let payload = {'id' : satellite_id };
		
		return this.http.get(SatelliteService.API + "/satellite",payload )
		.map(this.extractData);

	}

}

