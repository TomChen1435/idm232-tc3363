# Data Rules

The data is initially collected with a JSON file, as Excel was super annoying in dealing with long strings. 

## Structure

- title / string
- subtitle / string
- *banner* / image
- description / string
- ingredients / array
    - items / string
    - *ingredients* / image
- kitchen_tools / object
    - name / string
    - description / string
    - *kt* / image / 2 sizes
- steps / array
    - items / object
        - title / string
        - content / string
        - *stepx* / image / 2 sizes
