import { Component, OnInit } from '@angular/core';

import { ProfileService } from './../services/profile-service';
import { Router, ActivatedRoute, Params } from '@angular/router';

import { Profile } from './../models/profile';

@Component({
  selector: 'profile-user-component',
  templateUrl: 'templates/profile-user.component.html'
})
export class ProfileUserComponent implements OnInit{
	private username: string;
	private profile: Profile;
	constructor(private profileService: ProfileService,private route: ActivatedRoute){

	}


	ngOnInit() {

		this.route.params.subscribe(params => {
			this.username = params['user'];
			this.profileService.getProfile(this.username).subscribe((profile: Profile)=>{
				this.profile = profile;

			}, (error: any) => {

			});
		});

	}
}


