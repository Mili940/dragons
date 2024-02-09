# Tables of Contents
* [Instructions](#instructions)
* [Strucutre](#strucutre)
* [Note for WP setup](#wp)

## Instructions
1. When cloning the theme into the project directory, delete the theme `.git` directory
2. Rename the theme directory
3. Change `style.css` 
4. Set new text domain from `style.css` to all files where we have translation functions (_e(...), __(...), _x(...), etc.), you can use from the Visual Studio Code text replace option
5. Set the theme active into the WP dashboard
6. Set theme screenshot
7. Setup configuration into the `/includes/ThemeConfig.php` file
8. Install globally node v14.x.x , npm v.6.x.x, npm modules
9. Install node modules into the WP theme install `npm install`
----------------------------------------------------------------
* For compiling css and javascript run  `npm run dev`
* For build css and javascript run  `npm run build`

## Strucutre
- assets
   - css - **scss files**
   - js - **js modules**
   - images - **static images**
- dist - **Parcel build directory**
- includes - **In the root is theme configuration files**
   - core - **Core theme setup and functionality that don't change often**
   - development - **Files where developers do backend magic**
- templates - **This we define theme templates**
- template-parts - **Files for frontend structure and partial of pages, or other post types**

## WP
- Add `.gitignore` file into project root.&nbsp; Example: 
   ```
   .DS_Store
   .idea/
   .vscode/
   wp-config.php
   wp-cli.phar
   .htaccess
   ```
- Setup the `wp-config.php` file
- Go to the project URL and configure it
- After the first login save permalinks