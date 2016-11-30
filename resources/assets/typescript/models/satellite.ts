import { Mission } from "./mission";
import { SatelliteType } from "./satellite_type";
import { Orbit } from "./orbit";
import { Launch } from "./launch";


export class Satellite {
	public id: number;
	public created_at: string;
	public updated_at: string;
	public name : string;
	public content: string;
	public COSPAR: string;
	public wiki: string;
	public status: string;
	public orbit: Orbit;
	public mission: Mission;
	public satellite_type: SatelliteType;
	public launch: Launch;


	constructor() {
		// code...
	}

}