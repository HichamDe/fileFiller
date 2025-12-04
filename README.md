============================================================================================
||||                                                                                    ||||
#||||                                    File-Filler                                    ||||
||||                                                                                    ||||                    
============================================================================================

@ This project is built while studing the ISTA of INEZGANE responding to a problem we had as trainees
@ deeling with files as the main data base for testing perpeses

1- The Stuctor & Logic: 

    # The user will be able to fill a file with a random data using commands by writing them in the terminal or
    # in a file called ".config". Ex: "php index.php '{},Id:0' 15 ';' fileName" learn more in the syntax section

    # Each line of command writen by the user is called a 'line' each one containes var section '{}' and a maker 
    # sperated by a comma 'varSection,maker'

    1.1. maker

        # Each maker is an instance of one or multi Expression that is built by a Builder Class to return a value of
        # data Ex: " Int , Fake , Boolean , Owner ...ect "

        # Logic: command line => Vars & Expressions => Builder => Type => Value
    
    1.2. vars

        # vars are extracted from the line and gets pushed to the builders in an array called vars then you can get 
        # them back using the build-in type Owner Ex:  php index.php "{id=Id:0},Owner:id" 

2- The Syntax & Types:

    2.1. Text

        # returns a random text by specifying the length or a regelar text by adding a default value
        Ex:
            "Text:15:" \> dDiAZaXwEsoqLfm // Length is 15
            "Text::AGADIR" \> AGADIR 

    2.2. Integer

        # returns a random number by specifying the range or adding a default value
        Ex:
            "Integer:10-5:" \> 7 // it light return 6,8,9 or 10
            "Integer::10" \> 10 
    
    2.3. Fake

        # returns a fake data of a user by specifying the property 
        Ex:
            "Fake:user:firstName" \> Jhon 
