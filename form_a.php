<html>
<body>
<?php
function name($a,$b){
    if($a==0){
        return $b;
    }elseif($a==1){
        return $b;
    }elseif($a==2){
        return '<input type="text" name="initial" value="'.$b.'">';
    }elseif($a==2){
        return '<input type="text" name="initial" value="'.$b.'">';
    }elseif($a==3){
        return "_________";
    }
}

function form_a1($blank, $a, $c, $sub_ed){
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            FORM A
            <br>
            Automotive Intake Repair Form
            <br>
            (including all motorized vehicles and equipment)
            <br>
            <br>
            Work Order #
            <?php name($a,$blank[$c]); $c+=1;?> 
            <br>
            <br>
            SCHOOL INFORMATION
            <br>
            School Name and Address:
            <?php echo name($a,$blank[$c]); $c+=1;?><br>
            (hereinafter "the School”)
            <br>
            <br>
            Teacher:
            <?php echo name($a,$blank[$c]); $c+=1;?><br>
            <br>
            AUTOMOBILE TO BE REPAIRED
            <br>
            <table style="width:100%">
                <tr>
                    <td>
                        Year:
                        <?php echo name($a,$blank[$c]); $c+=1;?></td>
                    <td>
                        Make: 
                        <?php echo name($a,$blank[$c]); $c+=1;?></td>
                    <td>
                        Model:
                        <?php echo name($a,$blank[$c]);$c+=1; ?></td>
                </tr>
                <tr>
                    <td>
                        VIN #:
                        <?php echo name($a,$blank[$c]); $c+=1;?></td>
                    <td>
                        License Plate:
                        <?php echo name($a,$blank[$c]); $c+=1;?></td>
                    <td>
                        Odometer:
                        <?php echo name($a,$blank[$c]);$c+=1; ?></td>
                </tr>
            </table>
            <br>
            <br>
            Detailed description of work to be performed including anticipated parts (including whether each part is a
            new part provided by the original equipment manufacturer, a new part not provided by the original
            equipment manufacturer, a used part or a reconditioned part) shop materials, environmental related, fees,
            disposal/recycling fees, etc.:
            <br>
            <br>
            <?php echo name($a,$blank[$c]); $c+=1;?>
            <br>
            <br>
            Date on which the work shall be completed:
            <?php echo name($a,$blank[$c]); $c+=1;?><br>
            <br>
            <table style="width:100%">
                <tr>
                    <th>
                        TOTAL ESTIMATED COST
                    </th>
                    <th>
                        Price Per Unit
                    </th>
                    <th>
                        Line Total
                    </th>
                </tr>
                <tr>
                    <td>
                        PARTS:
                    </td>
                    <td>
                        $
                        <?php echo name($a,$blank[$c]); $c+=1;?></td>
                    <td>
                        $
                        <?php echo name($a,$blank[$c]); $c+=1;?></td>
                </tr>
                <tr>
                    <td>
                        LABOUR:
                    </td>
                    <td>
                        $
                        <?php echo name($a,$blank[$c]); $c+=1;?></td>
                    <td>
                        $
                        <?php echo name($a,$blank[$c]); $c+=1; ?></td>
                </tr>
                <tr>
                    <td>
                        SHOP SUPPLIES:
                    </td>
                    <td>
                        $
                        <?php echo name($a,$blank[$c]); $c+=1;?></td>
                    <td>
                        $
                        <?php echo name($a,$blank[$c]);$c+=1; ?></td>
                </tr>
                <tr>
                    <td>
                        RECYCLING/ DISPOSAL FEE:
                    </td>
                    <td>
                        $
                        <?php echo name($a,$blank[$c]); $c+=1; ?></td>
                    <td>
                        $
                        <?php echo name($a,$blank[$c]);$c+=1; ?></td>
                </tr>
                <tr>
                    <td>
                        TOTAL ESTIMATED COST:
                    </td>
                    <td>
                    </td>
                    <td>
                        $
                        <?php echo name($a,$blank[$c]); $c+=1;?></td>
                </tr>
            </table>
            <br>
            <br>
            The Board agrees that it will not charge the undersigned an amount that exceeds the Total
            Estimated Cost by more than 10 per cent.
            <br>
            Date of estimate:
            <?php echo name($a,$blank[$c]); $c+=1;?><br>
            This estimate expires on:
            <?php echo name($a,$blank[$c]); $c+=1; $a+=1;?><br>
            <br>
            Any parts removed in the course of work on or repairs to the automobile shall be (select one):
            <br>
            (A) returned to the undersigned 
            <br>
            <br>
            WAIVER AND RELEASE OF LIABILITY
            <br>
            · I agree to release and hold the Peel District School Board (the “Board”), its trustees, officers, agents,
            volunteers, students and insurers and their respective heirs, executors, personal representatives,
            successors and assigns (the “Indemnified Parties”) harmless and to indemnify them from and
            against all actions, damages, claims and demands which may be brought against the Indemnified
            Parties by or on behalf of the undersigned or any third party in respect of or arising out of the
            vehicle being in the possession of the Board, or out of any accidents which may result in injury or
            death of person or damage to or loss of property belonging to any person if such action depends in
            any way, in whole or in part on work having been performed on the vehicle by students of the
            Board.
            <br>
            · I agree to pay for all labour, parts, materials, supplies, environmental fees, disposal and recycling
            fees of all kinds, required to perform the work described above. Final payment is due when the
            work is completed.
            <br>
            · I understand that if my automobile is not claimed by me within THIRTY (30) days after notice of
            completion of work, whether or not I have actually received notice, the automobile and all property
            therein or thereon will be deemed abandoned and disposed of as considered appropriate in the sole
            discretion of the Board with the entire proceeds from such disposal belonging to the Board as
            beneficial owner and not as a trustee for its own use absolutely.
            <br>
            · I agree that any notice may be adequately given by prepaid post to the address below. I agree that
            the onus of keeping up to date at all times as to the progress of and cost of the repairs to the
            automobile rests solely with me.
            <br>
            · I may decline the estimated amount above and instead authorize the Board to perform the work
            outlined at a cost not to exceed $
            <?php echo name($a,$blank[$c]); $c+=1;?>
            , by initialing
            here:
            <?php echo name($a,$blank[$c]); $c+=1;?>
            .
            <br>
            <br>
            <table style="width:100%">
                <tr>
                    <td>
                        Name:
                        <?php echo name($a,$blank[$c]); $c+=1;?>
                    </td>
                    <td>
                        Phone: 
                        <?php echo name($a,$blank[$c]); $c+=1;?>
                    </td>
                    <td>
                        Address:
                        <?php echo name($a,$blank[$c]); $c+=1;?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                        <?php echo name($a,$blank[$c]); $c+=1;?>
                    </td>
                    <td>
                        Date:
                        <?php echo name($a,$blank[$c]); $c+=1;?>
                    </td>
                </tr>
            </table>
            <br>
            <br>
            Please proceed to the
            AUTOMOTIVE SERVICES RELEASE AND WAIVER OF LIABILITY AGREEMENT
            <br>
            <br>
            Automotive Repair Waiver
            <br>
            Work Order #
            <?php echo name($a-1,$blank[$c]); $c+=1;?><br>
            <br>
            AUTOMOTIVE SERVICES RELEASE AND WAIVER OF LIABILITY AGREEMENT
            <br>
            *Schools must retain form for 3 years*
            <br>
            WARNING: BY SIGNING THIS AGREEMENT YOU GIVE UP YOUR RIGHT TO BRING A COURT ACTION TO RECOVER
            COMPENSATION FOR ANY INJURY OR DEATH TO YOU OR OTHERS AND FOR DAMAGE TO YOUR
            PROPERTY ARISING DIRECTLY, INDIRECTLY OR CONSEQUENTIALLY FROM OR RELATED TO YOUR CHOICE
            TO HAVE UNTRAINED STUDENTS WORK ON YOUR AUTOMOBILE.
            <br>
            PRELIMINARY UNDERSTANDING
            <br>
            1. The undersigned acknowledges and agrees that while the undersigned’s automobile and all property located in or
            on the automobile is located at the School, whether indoors or outside, that the undersigned assumes all risk
            of loss or damage to the automobile and the said property and further agree that:
            <br>
            (a) The undersigned is aware that untrained students will perform work on our automobile and that
            allowing untrained students to do so has inherent risks and hazards, which the undersigned voluntarily
            assumes; and
            <br>
            (b) The undersigned has full knowledge of the nature and extent of the risks associated with allowing
            untrained students to work on the undersigned’s automobile, the particulars of which include but are
            not limited to:
            <br>
            · damage to or destruction of the automobile or any of its component parts, which damage or
            destruction will not be repaired except at my full cost and expense;
            <br>
            · return of the automobile in an unsafe and un-road worthy condition;
            <br>
            · death or personal injury to the undersigned or others from operation of the automobile following
            work being done on it by untrained students; and
            <br>
            (c) The undersigned agrees that there may be unforeseen and unforeseeable risks associated with the
            undersigned’s choice to have untrained students work on the undersigned’s automobile and those risks
            although not foreseen or foreseeable are accepted, it being understood that the intent of this waiver
            and release is to cover any and all eventualities whether foreseeable or not.
            <br>
            2. Despite the above-mentioned risks and hazards, the undersigned freely and voluntarily assume such risks and
            hazards inherent in allowing untrained students to work on the undersigned’ automobile at the School.
            <br>
            <?php echo name($a,$blank[$c]); $c+=1;?>
            <br>
            (Initial)
            <br>
            <br>
            RELEASE AND WAIVER OF LIABILITY
            <br>
            1. In consideration of the work to be done on the undersigned’s automobile, which will be done by untrained students
            of the Board, whether the work occurs during school hours, after school hours, or at any other time, the undersigned,
            as the owner(s) of the automobile described on the attached Repair Work Order Form agree to release, indemnify
            and save harmless the Indemnified Parties and each of them against and from all actions damages, claims and
            demands which may be brought against the above named persons by or on behalf of the undersigned or any third
            party in respect of or arising out of any accidents which may result in injury or the death of person or damage to or loss
            of property belonging to any person if such action depends in any way, in whole or in part on work having been done
            on the automobile by students of the School.
            <br>
            2. The undersigned acknowledges that the undersigned, having read and understood all of the contents of this
            Agreement, having taken specific note of the warning stated above, and intend to be legally bound to the contents of
            this Agreement in so signing it on this 
            <?php echo name($a,$blank[$c]); $c+=1;?>
            day of 
            <?php echo name($a,$blank[$c]); $c+=1;?>
            , 20
            <?php echo name($a,$blank[$c]); $c+=1;?>
            .
            <br>
            3. This Agreement is complimentary to and in addition to the Repair Work Order Form to which it is attached.
            <br>
            <br>
            Signature of Registered Owner: 
            <?php echo name($a,$blank[$c]); $c+=1;?>
            <br>
            <br>
            Name : 
            <?php echo name($a,$blank[$c]); $c+=1;?>
            <br>
            <br>
            <input type="submit" name="<?php echo $sub_ed ?>" value="<?php echo $sub_ed ?>">
        </form>
        <?php 
}
$workorder= $school= $teacher=
    $year=
    $make=
    $model=
    $vin=
    $license=
    $odometer=
    $description=
    $end_date=
    $parts_a=
    $parts_b=
    $shop_a=
    $shop_b=
    $labour_a=
    $labour_b=
    $fee_a=
    $fee_b=
    $total_cost=
    $est_date=
    $expire =
    $removed= $exceed= $initial=
    $name=
    $address=
    $phone=
    $email=
    $date=
    $sign_day=
    $sign_month=
    $sign_year=
    $signature=null;
$blank = array($workorder, $school, $teacher, $year, $make, $model,$vin,$license,$odometer,$description,$end_date,$parts_a,$parts_b,$shop_a,$shop_b,$labour_a,$labour_b,$fee_a,$fee_b,$total_cost,$est_date,$expire,$removed, $exceed, $initial,$name,$address,$phone,$email,$date,$workorder, $initial, $sign_day, $sign_month,$sign_year,$signature);

if (!isset($_POST['submit'])){
    echo form_a($blank, 0, 0, "submit");
}else{
    $removed= $_POST['removed'];
    $exceed= $_POST['exceed'];
    $initial=$_POST['initial'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $date=$_POST['date'];
    $sign_day=$_POST['sign_day'];
    $sign_month=$_POST['sign_month'];
    $sign_year=$_POST['sign_year'];
    $signature=$_POST['signature'];
    echo form_a($blank, 1, 0, "edit");

}
        ?>
    </body>
</html>
