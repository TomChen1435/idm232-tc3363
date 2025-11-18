# Data Rules

The data is initially collected with a JSON file, as Excel was super annoying in dealing with long strings. 

## Structure

- title / string
    - all letters are lowercased 
    - "-" becomes "_" 
    - "&" is removed 
- subtitle / string
    - rules for title also apply here
    - concatenate with "_" 
- **banner** / image
- description / string
- ingredients / array
    - items / string
    - **ingredients** / image
- kitchen_tools / object
    - name / string
    - description / string
    - **kt** / image / **2 sizes**
- steps / array
    - items / object
        - title / string
        - content / string
        - **stepX** / image / **2 sizes**
