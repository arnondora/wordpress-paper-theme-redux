# PaperTheme Redux (Formally PaperTheme 3.0)

## Introduction
PaperTheme Redux is the reimplementation of PaperTheme with the new design and more customisable. More features will come out soon, Stay tune!

If you found any bugs or want to give a suggestion, feel free to report or pull request.

## To Develop
- Clone this repository by run `git clone https://github.com/arnondora/wordpress-paper-theme-redux.git`
- run `npm install` to install dependencies
- run `npm dev` to run gulp auto-task

## To Deploy
- run `npm run build` to build all of required components
- Remove unnecessary including .git and src folder to reduce size of the theme.
- Upload to your installed wordpress web server "/wp-content/themes/PaperThemeRedux"

## Project Structure
- /dist stores all the compiled stylesheet and javascript
- /src stores all the pre-compiled stylesheet and javascript
  - /src/js stores all javascript files
  - /src/scss store all the scss stylesheet files the compile home target is style.scss which are linked to the other files.

  ## Known Problems
  - Some of style that are not used in pages may be removed by purifycss. Make sure that you add all of these style in the whitelist in `gulpfile.js`
