import { Component, OnInit} from '@angular/core';

import {UserService} from "./services/user-service";

import { Router, Event as RouterEvent, NavigationStart, NavigationCancel, NavigationEnd, NavigationError} from '@angular/router';

import {User} from "./models/user";


@Component({
  selector: 'my-app',
  templateUrl: 'templates/app.component.html'
})
export class AppComponent  implements OnInit{
	loading: boolean = true;
	user: User;

	constructor(public userService: UserService, private  router: Router){}
	ngOnInit() {
		this.router.events.subscribe((event : RouterEvent) =>{
				if(event instanceof NavigationStart)
				{
					this.loading = true;
				} 

				if(event instanceof NavigationCancel)
				{
					this.loading = false;
				}

				if(event instanceof NavigationEnd)
				{
					this.loading = false;
				}

				if(event instanceof NavigationError)
				{
					this.loading = false;
				}


		});


	}
}


