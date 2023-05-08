Syntax:
    Types
        Id:start -Example: Id:15
        Text:(length or none):(defaultValue or empty) - Example: Text:15:
        Integer:(range or none):(defaultValue or empty) - Example: Integer:10-13:
        Fake:user:email

    Complex
        Complex:type+type

    Owner
        Owner:varName - Example: {city=Text:none:AGADIR} , Owner:city


Any thing returns a value needs to be built

{firstName=Fake:user:firstName+lasName=Fake:user:lastName+test=Text:none:yes} , Owner:lastName , Complex:Owner:firstName+Text::_+Owner:lastName+Text::@+Text:2:# fileFiller


