# Case Study

## Hero Image

## Overview

This the executive summary of your case study. It allows your prospects to quickly understand the highlights of your past work without reading the entire thing. This section should include the core takeaways from all other sections including the main problem, an overview of the solution, and key results. This is typically written last, so that you can scan for the main points from each section below and summarize them into a one or two paragraph synopsis.

## Context and Challenge

This section is designed to provide your prospective client with a detailed description of the context that led to the creation of the project, and can be distilled into three main elements:

1. Background / Description / Timeline / Budget / Purpose
2. The Problem: Define why this project exists and what problem it seeks to solve.
3. Goals & Objectives: What are the metrics that will define if this project is successful. What are the tangible goals.

Give a quick overview of the project. What were the goals for the project. Keep the focus on problem-solving, not just asset delivery. Define if it was a solo or team based project. If team based, what your role was on the project.

## Process and Insight

This section should elaborate on your design process. How did you go about developing the final solution. What were the steps that will help the reader to visualize the work and, more importantly, to see that it was created by human beings. We want see how the final came into being, not just what the piece looks like at the end. These could include (but not limited to) research:

* Target Audience / User Personas
* User Journeys
* Design Sketches
* Wireframes
* Style Guide
* Prototypes
* Code/Dev
* UX Testing Notes
* Final Project

If this was a team based project, make sure to define your specific contributions to the project. When was there team consensus, and what were you specifically responsible for. Be sure to include images / video for each stage of the process as appropriate.

## Solution

This is where you get to show off your final design with detailed images and videos, and a link to the live project if available. Describe your design work. Take the time to explain in detail your site’s defining features like its UX, navigation structure, content strategy, or unique mobile attributes. If you put the effort into crafting descriptions that complement your visual assets, your readers will feel much more confident in your decisions as a designer/developer.

## Results

A quick wrap up. Was the project a success and why. Do you have qualitative and quantitative success metrics from your project? These should directly address the objectives you established in The Context and Challenge section. If this is client work, include a client testimonial. This also is an opportunity to define the lessons learned and what you would change about your process / approach in the future.

## Draft

### Overview

This project involved building a dynamic recipe gallery site powered by PHP and a MySQL database, completed over a 10-week period. Working from a shared dataset, I focused on creating a mobile-first structure that kept each feature—home, recipe view, search, filter, and results—separate and cognitively simple. The backend relied heavily on prepared statements, parameter binding, and reusable PHP components, ensuring stability, efficient routing, and clean code organization. A significant amount of effort went into data preparation and media optimization, including restructuring the recipe dataset and converting all images into AVIF for faster loading.

The final site is fully hosted on the school server and delivers a clear, streamlined experience that emphasizes usability over stylistic excess. User feedback and testing confirmed its reliability, and the project met its original goals by keeping the interface simple, predictable, and technically sound. The process also underscored the importance of choosing the right side—client or server—for each interaction, informing how I would refine the filter feature in future updates.

### Context & Challenge

Over the course of ten weeks, I developed a recipe gallery website using PHP and a MySQL database. This was a solo project, but I was provided with predefined content and a data structure, allowing me to concentrate primarily on the technical implementation. The main requirement was to store and serve all recipe data from a database for more efficient management and retrieval, while using PHP to dynamically generate the site’s pages. Because PHP’s declarative structure blends closely with HTML, the project became a natural extension of my existing front-end knowledge into foundational back-end development.

The design problem centered on how to present complex recipe content without overwhelming users. During early discussions with classmates—who were working from the same dataset—I found most gravitated toward highly stylized layouts. I deliberately took a different direction. As someone who dislikes elaborate cooking procedures myself, I wanted the interface to avoid competing with the content, instead prioritizing clarity and minimalism. Reducing unnecessary visual elements became a key design principle, ensuring that the recipes remained the focal point.

Success for this project meant constructing an interaction flow that remained stable under all conditions and a design that preserved simplicity at every stage. The goal was an experience where users could navigate recipes quickly and reliably, without distractions or structural failures, supported by a clean PHP–MySQL backbone.

### Process & Insight

Because this project centered more on backend implementation than on visual design, the process began with defining a clear site structure rather than extensive UI exploration. I documented the full layout in a markdown file and created quick sketches to validate the flow. The only part that received more detailed design attention was the header and card layout, which I refined in Figma to finalize typography choices and ensure the interface remained straightforward.

Preparing the dataset became one of the most involved stages. I quickly discovered that Excel struggled with long text strings, so I rebuilt the entire dataset in JSON to regain control over formatting. After several rounds of regex-based cleanup and restructuring, I converted the final version into CSV and imported it through phpMyAdmin to generate the necessary SQL tables. In parallel, I reorganized all media assets—renaming, removing duplicates, and standardizing file conventions. Using ImageMagick via command line, I batch-converted every image into AVIF format, enabling faster loading and more efficient delivery once hosted.

On the backend, I used PHP extensively—not just because it was required, but because its flexibility made it an intuitive way to assemble the entire site. I relied on prepared mysqli statements to establish secure database connections at the top of each page and used HTTP GET parameters to pass context between routes, making the overall flow predictable and lightweight. PHP’s include function played a major role as well, allowing shared components and logic to be reused across multiple pages without duplication.

Testing introduced its own challenges. Running PHP locally through MAMP occasionally created unexpected inconsistencies, and unlike static HTML/CSS/JS deployments, managing a PHP site on the required school server meant manually updating files without automated version control. This created moments where the server version drifted from my GitHub commits, forcing me to track updates carefully and re-establish a consistent deployment environment. While complicated, the experience became an important lesson in handling server-side development workflows in practice.

### Solution

The final website is structured around a mobile-first architecture, prioritizing clarity and cognitive simplicity. Because smaller screens demand more focused navigation, I separated each major function into its own dedicated route: home, single recipe, search, filter, and results all operate as independent pages. This approach keeps each task self-contained and reduces mental load, allowing users to engage with individual features without distraction. Despite having different purposes, the pages share a unified layout and consistent components, which also streamlined much of the PHP logic behind them.

All dynamic content on the site is generated through PHP, using a set of reusable scripts that loop through database queries to construct each interface element. Recipes, search results, and filter outputs are all built this way, allowing the site to respond directly to database updates without requiring any manual HTML adjustments. The GET method is used extensively to pass parameters between pages, enabling lightweight routing and predictable transitions throughout the experience.

One of the most important technical decisions was using PHP’s prepared statements with parameter binding. This eliminated entire categories of destructive errors and greatly reduced the risk of accidentally breaking queries or introducing unsafe inputs—problems that can feel almost like self-inflicted XSS attacks. Shared components were handled through PHP’s include function, which kept the codebase clean and prevented repetition across routes. Combined with the earlier image optimization workflow, the final site is both structurally simple and computationally efficient.

The completed project is fully deployed and hosted on the school server, where the dynamic backend and database-driven pages can be viewed in a live environment.

### Results

The project proved successful on both technical and experiential levels. Multiple people tested the live site on the school server, and no visible errors or structural failures were reported. One of the most meaningful pieces of feedback came from a family member who remarked that the interface felt “almost too simple”—a comment that affirmed the core design goal of minimizing cognitive load and ensuring the recipes themselves remained the primary focus. The site also performed efficiently thanks to optimized AVIF images and the database-driven backend, which kept loading speeds fast and consistent.

Reflecting on the project, the main area I would approach differently is the filter functionality. In its current form, it triggers a full page reload through the server, even though the underlying logic could have been handled more smoothly on the client side using a simple combination of CSS and JavaScript. Reworking this feature would create an even lighter interaction flow and reduce unnecessary server calls. This insight has become a motivating factor for future refinement of the project.
