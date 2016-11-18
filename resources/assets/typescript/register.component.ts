import { Component, OnInit }      from '@angular/core';
import { Router } from '@angular/router';

import { FormBuilder, FormGroup } from '@angular/forms';

import {UserService} from "./services/user-service";

@Component({
  selector: 'register',
  templateUrl: 'templates/register.component.html',
  providers: []
})
export class RegisterComponent {
	registerForm : FormGroup;
	errors:  any;
	constructor(private userService: UserService,private router: Router, fb: FormBuilder){
		

		this.registerForm = fb.group({
			'name' :'',
			'email' : '',
			'password' : '',
			'password_confirmation' : ''
		});	
	}

	register():void{
		let temp = this.errors;
		this.userService.register(this.registerForm.value).subscribe(
			function(result:any){},(e : any) => {
				this.errors = <any>e;
				if(this.errors == undefined)
				{
					this.router.navigate(['/']);
				}
			}
		);
		// if(this.errors == undefined)
		// {
		// 	this.router.navigate(['/']);
		// }
	}
}


