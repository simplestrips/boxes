# Boxes     

**Plugin Name**: Boxes      
**Plugin URI**: [https://simplestrips.com](https://simplestrips.com/)      
**Description**: Wordpress plugin that creates the custom post type 'boxes'. Exposes the api of 'boxes'.      
**Version**: 0.0.1      
**Author**: Steve Berry      
**Author URI**:  [https://simplestrips.com](https://simplestrips.com/)      
**License**: GPLv2 or later      
**Text Domain**: boxes      

---         

## API        
'Boxes' Endpoint: [http://simplestrips.com/api/wp-json/wp/v2/boxes](http://simplestrips.com/api/wp-json/wp/v2/boxes)          


## Properties         

**Expiration**     
```javascript      
$args_box_expiration = array(                  
   'type' => 'string',         
   'description' => 'Expiration date of the box.',         
   'single' => true,         
   'show_in_rest' => true,         
);         
register_meta( $object_type, 'box_expiration', $args_box_expiration );         
```      



## Copyrignts         
This program is NOT free software; you can NOT redistribute it and/or modify it under the digital software intelectual propety terms of the Simple Strips, LLC. as published by Simple Strips, LLC.; either version 2 of the License, or (at your option) any later version. This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY ANY WARRANTY of FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details. You should have received a copy of the digital software intelectual propety terms of the Simple Strips, LLC. along with this program; if not, write to Simple Strips, LLC. Columbus, CA 43004, USA. Copyright 2005-2018 Simple Strips, LLC.          



