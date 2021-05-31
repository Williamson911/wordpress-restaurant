# CMS Restaurant

| Challenge Parameters | Challenge Details                                                                                       |
| :------------------- | :------------------------------------------------------------------------------------------------------ |
| Challenge type       | `Learning a CMS, consolidating PHP`                                                                     |
| Duration             | `3 weeks`                                                                                               |
| Deadline             | `31/05/2021 17h00`                                                                                      |
| Group composition    | [William](https://github.com/Williamson911) & [Pierre](https://github.com/RicciPierre?tab=repositories) |

## Learning objectives

At the end of this challenge we should be able to :

- Build our own theme for a CMS
- Create a fancy client interface with custom fields
- Follow a design pixel perfect

## Presentation

The Chef has a pleasant restaurant with a very revolutionary concept. His concept is to combine the two extreme types of food: junk food and very healthy food !

He has a lot of customers in his restaurant, so it’s time for him to spread his cooking skills through the country. That’s why he will open 2 brand new branches.

To help him to become known and to implement new services for his customers, he needs a website.

To reach his objectives, he contacted a project manager who also is a professional designer, called Casey Ryback. After weeks of work, they finished the design and decided on the features of the future website.

It's at this moment we take action ! Casey called our team to make the project. He provides us magnificent layouts and gives us precises instructions.

## Client's request

The Chef would like to edit the content of his website regularly because he wants to change his menus often and create new recipes with his collaborators. That’s why a CMS is the best solution to provide for him.

It does not matter what CMS we use, as long as the user interface is easy to understand, and the fields to fill in are clear.

**This project needs to be customer-oriented. The dashboard for the client has to be clear, easy to use and match the design.**

To help us, Casey Ryback gives us the license _ACF PRO_, a WordPress plugin that will provide you the possibility to create _custom fields_.

Due to the high standards of the design, the client would like you to respect it strictly.

## Resources

The design with the different formats, as well as the images and SVG's, are located inside the folder named [assets](https://github.com/Williamson911/wordpress-restaurant/tree/master/wordpress/wp-content/themes/devres/assets/images).

### Design

The different design formats provided are in Desktop, Tablet portrait (768px) and Mobile (320px).

---

## Instructions

Here the list of instructions received.

They show the contents types (pages, posts, categories), as well as the customs fields to create.

### INFO

First of all, provide a field group so that the client can fill in the information about the **main restaurant** :

- Adress
- Phone
- Email
- Links social medias : Facebook, Twitter, Instagram, Linkedin
- Open Hours

This information will be written in the **footer**.

### HOMEPAGE

**Custom fields :**

    *** Banner top  ***
    	* Subtitle + Main Title + Img + Intern Link
    	* 3 X Icon + Title + Text
    *** Intro ***
    	* Left : Image
    	* Right : Title + Subtitle + Text + Signature (Subtitle + title)
    *** 3 Restaurants ***
    	See the posts Restaurants.
    *** Our Menu ***
    	* 4 X Img
    	* Subtitle + Title + + Text + Intern Link
    *** Testimony ***
    	* Repeater :
    		- Image
    		- Text
    		- Name
    *** Recipes Blog ***
    	See Posts Recipes

### POSTS RESTAURANTS

The restaurants are like Posts types. **Each restaurant page is a post**.

**Custom fields :**

    *** Banner top  ***
    	Subtitle + Main Title + Img + Intern Link
    *** Banner Presentation ***
    	Subtitle + Title
    	Repeater :
    		- Image + Subtitle + Title + Wysiwig
    	(The first repeater text has to be called in the Front-page presentation)
    *** Location ***
    	Subtitle + Title
    	Map (for the map you can just copy the map image ;)), but if you're brave, you can download a plugin to set up a map and link it with Leaflet.
    *** Reservation ***
    	Subtitle + Title + Image
    *** Our Menu ***
    	Take the fields from the front-page

> ☝️ **NOTE:** There is also a form to allow customers to make reservations.

### PAGE MENU

**Custom fields :**

    *** Banner top  ***
    	Subtitle + Main Title + Img + Intern Link
    *** The Menu ***
    	Subtitle + Title
    	Repeater :
    		- Title
    		- Repeater :
    			- Title + Text + Price

So, here, we have a double repeater.

Some of dishes are special selections from The Chef.

### SINGLE RECIPE

We created a post type called "recipes". **A recipe must have one category.**
The client could create any category he wants.

**Custom fields :**

    *** Banner top  ***
    	Category
    	Text
    	Image
    *** Ingredients ***
    	Wysiwyg
    *** Instructions ***
    	Repeater :
    		- Wysiwyg
    		- Image (optionnal)

On the left of this page, you have social icons which will allow to share the recipe to social medias.

### ARCHIVE RECIPES

There are no custom fields for this page.

The posts have to be displayed in anti-chronological order.

This page has a pagination system. Display 5 recipes per page.

Display the categories at the top. They should be links that we can select to sort by category.

### MENU HEADER

- The Title "DEV RESTAURANT" has to redirect to the homepage
- The house icon has to redirect to the homepage
- "Our Restaurants" has to redirect to the homepage, at section "our restaurant"
- The link "Order" is not active for now.

### Users

We will not give our administrator access to The Chef, we have to create his **editor account**.

We must also create a special type of user, this user can only add a recipe post.

## Deployment

Project link :
