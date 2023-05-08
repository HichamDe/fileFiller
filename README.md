Syntax:
    Types
        Id:start -Example: Id:15
        Text:(length or none):(defaultValue or none) - Example: Text:15:none
        Integer:(range or none):(defaultValue or none) - Example: Integer:10-13:none
        Boolean:(defaultValue or none) - Example: Boolean:true
        Fake:user:email

    Complex
        Complex:type+type

    Owner
        Owner:varName - Example: {city=Text:none:AGADIR} , Owner:city


Any thing returns a value needs to be built

{firstName=Fake:user:firstName+lasName=Fake:user:lastName+test=Text:none:yes} , Owner:lastName , Complex:Owner:firstName+Text:none:_+Owner:lastName+Text:none:@+Text:2:none# fileFiller


Logic : Line -> Expression -> Complex or Simple -> Builder -> Type -> Value
Id:0 is an expression that does return a value
Builder is a class that convert to expression into a value
when the expression is built it's called a column

Complex is not a type it's a syntax

{},(Id:0+Text::none)

