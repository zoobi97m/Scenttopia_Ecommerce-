const scenttopia = [
                                
                        {
                            "scentname": "Japanese Honey Suckle",
                            "scent_description": ["Scent description: ","A sweet flowering vine with one of the most loved floral scents"],
                            "Top_notes": ["Top notes: ","Mandarin, Pine needle"],
                            "middle_notes" : ["Middle notes: ","Grape, Neroli" ],
                            "Base_notes": ["Base notes:","Vanilla, malt, jasmine and cedar wood"]
                        },
                        
                        {
                            
                            "scentname": "Amazonian Grape",
                            "scent_description": ["Scent description: ","Ripe red grape is blended with tart blood plum notes and a hint of sweet strawberry to create this enticing fruit fragrance"],
                            "Top_notes": ["Top notes: ","Red Grape, Blood Plum"],
                            "middle_notes": ["Middle notes: ", "Strawberry, Jasmine" ],
                            "Base_notes": ["Base notes: ","Vanilla, Malt"]
                            
                        },
                        
                        {
                            
                            "scentname": "Ms Dior",
                            "scent_description": ["Scent description: ","Bursting with floral and citrus notes, this alluring scent is highlighted by mandarin and bergamot with classic florals rose and jasmine and finished with sensual musk and patchouli"],
                            "Top_notes": ["Top notes: ","Mandarin, Bergamot"],
                            "middle_notes": ["Middle notes: ", "Jasmine, Rose" ],
                            "Base_notes": ["Base notes: ","Musk, Patchouli"]
                            
                        },
                        
                        {
                            
                            "scentname": "Frankincense and Myrrh",
                            "scent_description": ["Scent description: ","Enchanting, aromatic blend of frankincense and myrrh with balsam, spice, patchouli and sandalwood."],
                            "Top_notes": ["Top notes: ","Cinnamon, Nutmeg"],
                            "middle_notes": ["Middle notes: ", "Balsam, Frankincense" ],
                            "Base_notes": ["Base notes: ","Patchouli, Sandalwood"]
                            
                        },
                        
                        {
                            
                            "scentname": "Cinnamon Apple",
                            "scent_description": ["Scent description: ","This fruity, spicy blend is boosted with essential oils of cinnamon bark, clove leaf and nutmeg combined with tangy apple and a light citrus top note"],
                            "Top_notes": ["Top notes: ","Mandarin, Lemon"],
                            "middle_notes": ["Middle notes: ", "Tangy Apple, Nutmeg" ],
                            "Base_notes": ["Base notes: ","Cinnamon Bark, Vanilla"]
                            
                        },
                        
                        {
                            
                            "scentname": "Lady Pink",
                            "scent_description": ["Scent description: ","A sassy & fabulous sweet pink apple aroma infused with zesty mimosa fragrance. A scent to freshen any room."],
                            "Top_notes": ["Top notes: ","Blackcurrent , Raspberry"],
                            "middle_notes": ["Middle notes: ", "Mandarin, Turkish Rose" ],
                            "Base_notes": ["Base notes: ","Musk, SandalWood, Amber"]
                            
                        },
                        
                                    
                                    
                                
];
var m =  $("<select id = 'dropDown_scents'name='scents' class = 'candle_sizes'>");
m.append("<option value='' selected disabled hidden></option>");
m.append("<option class = 'selection' value='Large'>Japanese Honey Suckle</option>");
m.append("<option class = 'selection' value='Small'>Amazonian Grape</option>");
m.append("<option class = 'selection' value='Large'>Ms Dior</option>");
m.append("<option class = 'selection' value='Small'>Frankincense and Myrrh</option>");
m.append("<option class = 'selection' value='Large'>Cinnamon Apple</option>");
m.append("<option class = 'selection' value='Small'>Lady Pink</option>");

$("#scents").append(m);