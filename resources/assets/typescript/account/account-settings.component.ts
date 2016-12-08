import { Component, OnInit} from '@angular/core';

import { FormBuilder, FormGroup, FormControl } from '@angular/forms';
import { ProfileService } from './../services/profile-service';


@Component({
  selector: 'account-component',
  templateUrl: 'templates/account-settings.component.html'
})
export class AccountSettingsComponent  implements OnInit{

	passwordForm : FormGroup;
	errors:  any;
	
	constructor(private fb: FormBuilder,private profileService: ProfileService){}
	
	ngOnInit() {
		this.passwordForm = this.fb.group({
			'old_password' : '',
			'password' : '',
			'password_confirmation' : ''
		});
	}

	updatePassword()
	{
		this.profileService.changePassword(this.passwordForm.value).subscribe((result: any) =>
		{

		},(errors: any) =>{
			this.errors = errors;

		});
	}

}


