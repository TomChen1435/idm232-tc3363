# Data Rules

The data is initially collected with a JSON file, as Excel was super annoying in dealing with long strings. 

## Structure

- id / integer 
- title 
- subtitle 
- description 
- ingredients 
    - Items are divided by "_LINE_BREAK_" 
- kitchen_tools 
    - Name and description are divided by "_LINE_BREAK_" 
- steps 
    - Steps are divided by "_STEP_BREAK_" 
        - Title and description are divided by "_LINE_BREAK_" 
            - Title can be null, represented by "_BLANK_" 

## Image file names 

- "id_number" 
    - banner.avif/jpg 
    - ingredients.avif/png 
    - large 
        - kt.avif/jpg 
        - "stepX".avif/jpg 
    - small 
        - kt.avif/jpg 
        - "stepX".avif/jpg 
