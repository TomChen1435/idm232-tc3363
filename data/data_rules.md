# Data Rules

The data is initially collected with a JSON file, as Excel was super annoying in dealing with long strings. 

## Structure

- title / string
- subtitle / string
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

## Files

- "data0.json" contains all original data
- Because JSON to CSV conversion tools always flatten the arrays and objects, in "data1.json", arrays and objects are wrapped with quotation marks, so the data gets converted as a string, similar to what manual inputs in spreadsheets would end up with
