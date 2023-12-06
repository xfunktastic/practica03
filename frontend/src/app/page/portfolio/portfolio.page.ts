import { ApiService } from './../../services/api.service';
import { Component, OnInit } from '@angular/core';
@Component({
  selector: 'app-portfolio',
  templateUrl: './portfolio.page.html',
  styleUrls: ['./portfolio.page.scss'],
})
export class PortfolioPage implements OnInit {

  users: any [] = [];
  frameworks: any [] = [];
  hobbies: any [] = [];

  constructor(private ApiService: ApiService) { }

  ngOnInit() {
    this.fillData();
  }

  fillData(){
    this.ApiService.getUsers().subscribe(data=>{
      console.log(data);
      this.users = data;
      this.frameworks = data[0].frameworks;
      this.hobbies = data[0].hobbies;
    })
  }
}
