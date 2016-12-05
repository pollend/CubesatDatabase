import { Component, OnInit} from '@angular/core';

import { FormBuilder, FormGroup, FormControl } from '@angular/forms';
import { FileUploader } from 'ng2-file-upload';
import { UserService } from './../services/user-service';


@Component({
  selector: 'account-component',
  templateUrl: 'templates/account-profile.component.html'
})
export class AccountProfileComponent implements OnInit{
	 public profile_image :FileUploader;
	profile_form : FormGroup;
	constructor(private fb: FormBuilder, private userService: UserService){}
	
	ngOnInit() {
		this.profile_image = this.userService.getProfileImageUploader();
		this.profile_form = this.fb.group({

		});
	}

	updatePublicProfile()
	{
		if(this.profile_image.queue)
		{
			this.profile_image.uploadItem(this.profile_image.queue[0]);
		}
	}

}


