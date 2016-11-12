import { Component } from '@angular/core';

import {UserService} from "./services/user-service";


@Component({
  selector: 'my-app',
  templateUrl: 'templates/app.component.html'
})
export class AppComponent {
	constructor(public userService: UserService){}
}


