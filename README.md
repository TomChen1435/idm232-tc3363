# idm232-tc3363

## Design

[Figma design file](https://www.figma.com/design/JP64jvvgcEihcjTY9Yq5db/IDM-232?node-id=0-1&t=6T7ndyUQuFGd6oRu-1)

## Components

- Buttons
    - Search button
        - In header: go to SEARCH
        - In search: do to SEARCH_RESULT or NO_RESULT
    - Search_again button: go to SEARCH
- Cards: go to corresponded RECIPE
- Header
    - Home button: return to HOME
    - Search button
- Footer

## Page Structure

Core concepts: browsing, searching, and search_resulting through the recipes

- HOME
    - Greeting message
    - Cards grid
- RECIPE
    - Card
    - Description block
    - Ingredients
        - Image
        - Unordered list
    - Kitchen tools
        - Image
        - Tool name
        - Tool description
    - Steps
        - Image
        - Step title (optional)
        - Step content
- SEARCH
    - Greeting message
    - Form
        - Input
        - Search button
- SEARCH_RESULT
    - Summary message
    - Cards grid
- NO_RESULT
    - Error icon
    - Error message
    - Search_again button
