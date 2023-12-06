import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';


const routes: Routes = [
  {
    path: 'portfolio',
    loadChildren: () => import('./page/portfolio/portfolio.module').then( m => m.PortfolioPageModule)
  },
  {
    path: '',
    redirectTo: 'portfolio',
    pathMatch: 'full'
  },
  {
    path: 'edit-user',
    loadChildren: () => import('./page/edit-user/edit-user.module').then( m => m.EditUserPageModule)
  },
  {
    path: 'edit-framework',
    loadChildren: () => import('./page/edit-framework/edit-framework.module').then( m => m.EditFrameworkPageModule)
  },
  {
    path: 'edit-hobbie',
    loadChildren: () => import('./page/edit-hobbie/edit-hobbie.module').then( m => m.EditHobbiePageModule)
  },
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
