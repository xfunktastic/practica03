import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { EditHobbiePageRoutingModule } from './edit-hobbie-routing.module';

import { EditHobbiePage } from './edit-hobbie.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    EditHobbiePageRoutingModule
  ],
  declarations: [EditHobbiePage]
})
export class EditHobbiePageModule {}
