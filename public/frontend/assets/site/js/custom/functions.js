function toggleDisable(e, r) {
    $("#" + e).prop("disabled", r);
}
function validateLisenceForm(e) {
    var r = $("#" + e + " #lisence_update_form").serialize(),
        a = BASE_URL + "users/extendLisence";
    $.ajax({
        type: "POST",
        url: a,
        data: r,
        dataType: "json",
        beforeSend: function () {
            toggleDisable("btn-demo", !0),
                $("#btn-demo").after(function () {
                    return getLoadingImg();
                });
        },
        success: function (r) {
            "Error" == r.msgStatus
                ? $("#" + e + " #response").html(r.msg)
                : "Success" == r.msgStatus &&
                  ($("#" + e + " #response").html(r.msg),
                  setTimeout(function () {
                      redirectPage(BASE_URL + "users/");
                  }, 2e3)),
                toggleDisable("btn-demo", !1),
                $("#imgLoader").remove();
        },
        error: function () {
            alert("something went wrong please try again"),
                toggleDisable("btn-demo", !1),
                $("#imgLoader").remove();
        },
    });
}
function radioOneClick() {}
function radioTwoClick() {}
function radioThreeClick() {}
function redirectPage(e) {
    setTimeout(function () {
        window.location.href = e;
    }, 2e3);
}
function getLoadingImg() {
    return (
        '<span id="imgLoader" style="display:block;"><img src="' +
        (BASE_URL + "assets/admin/images/loading.gif") +
        '" /></span>'
    );
}
function submitForm(e) {
    (document.listing_form.action = e), document.listing_form.submit();
}
function updateCartQty() {
    var e = BASE_URL + "carts/updateCart";
    (document.cartForm.action = e), document.cartForm.submit();
}
function updateCartLisenceQty() {
    var e = BASE_URL + "carts/updateLisenceCart";
    (document.cartForm.action = e), document.cartForm.submit();
}
function ajaxLoadCertifications(e) {
    if (e > 0) {
        var r = BASE_URL + "certifications/ajaxGetcerts";
        $.ajax({
            type: "POST",
            url: r,
            data: { vid: e },
            dataType: "json",
            beforeSend: function () {
                $("#certification_id").before(function () {
                    return getLoadingImg();
                });
            },
            success: function (e) {
                for (
                    var r = '<option value="">Select Certification</option>',
                        a = 0;
                    a < e.length;
                    a++
                )
                    r +=
                        '<option value="' +
                        e[a].id +
                        '">' +
                        e[a].name +
                        "</option>";
                $("#certification_id").find("option").remove().end().append(r),
                    $("#imgLoader").remove();
            },
            error: function () {
                alert("something went wrong please try again"),
                    $("#imgLoader").remove();
            },
        });
    } else {
        $("#certification_id")
            .find("option")
            .remove()
            .end()
            .append('<option value="">Select Certification</option>'),
            $("#imgLoader").remove();
    }
}
function ajaxLoadExams(e) {
    if (e > 0) {
        var r = BASE_URL + "exams/ajaxGetexams";
        $.ajax({
            type: "POST",
            url: r,
            data: { cid: e },
            dataType: "json",
            beforeSend: function () {
                $("#exam_id").before(function () {
                    return getLoadingImg();
                });
            },
            success: function (e) {
                for (
                    var r = '<option value="">Select Exam</option>', a = 0;
                    a < e.length;
                    a++
                )
                    r +=
                        '<option value="' +
                        e[a].id +
                        '">' +
                        e[a].name +
                        "</option>";
                $("#exam_id").find("option").remove().end().append(r),
                    $("#imgLoader").remove();
            },
            error: function () {
                alert("something went wrong please try again"),
                    $("#imgLoader").remove();
            },
        });
    } else {
        $("#exam_id")
            .find("option")
            .remove()
            .end()
            .append('<option value="">Select Exam</option>'),
            $("#imgLoader").remove();
    }
}
function UpdateGrandTotal() {
    var e,
        r = 0;
    $(".cartQty").each(function () {
        var e = $(this).attr("data") * $(this).val();
        (e = parseFloat(e).toFixed(2)),
            console.log(e),
            $(this)
                .parent()
                .parent()
                .next("td")
                .children("p")
                .children()
                .text("$" + e);
    });
    var a = 0;
    $(".sub-total-amount").each(function () {
        var e = $(this).html().replace("$", "");
        (e = e.replace(",", "")), (Am = parseInt(e)), (a = parseInt(a + Am));
    }),
        (e = parseInt($("#DiscountAmount").html().replace("$", ""))),
        (r = parseInt(a - e)),
        (r = parseFloat(r).toFixed(2)),
        $("#DiscountNewAmount").html("$" + r),
        $("#GrandTotalAmount").html("$" + r);
}
function validate_coupon_code(e) {
    UpdateGrandTotal();
    var r = BASE_URL + "carts/validate_coupon";
    $(".loadingimg").css("display", "block"),
        $.ajax({
            type: "POST",
            url: r,
            data: { Coupon: e },
            dataType: "html",
            beforeSend: function () {},
            success: function (e) {
                if (
                    ((e = e.replace(/\s\s+/g, " ")),
                    (RespObject = JSON.parse(e)),
                    RespObject.Status)
                ) {
                    var r = RespObject.Coupon.id,
                        a = RespObject.Coupon.coupon_code,
                        t = (RespObject.Coupon.discount_type, 0),
                        o = 0;
                    $(".sub-total-amount").each(function () {
                        var e = parseInt($(this).html().replace("$", ""));
                        t = o = parseInt(o + e);
                    });
                    var n = 0;
                    if (
                        ($(".cartQty").each(function () {
                            var e = parseInt($(this).val().replace("$", ""));
                            n = parseInt(n + e);
                        }),
                        1 == RespObject.Coupon.discount_type)
                    ) {
                        var s = RespObject.Coupon.discount_amount,
                            i = o - s,
                            l =
                                ((t = i = Math.round(100 * i) / 100),
                                (s / o) * 100);
                        $(".disCode").html('"' + a + '"'),
                            $(".disPer").html(l),
                            console.log(a),
                            console.log(l);
                    } else if (2 == RespObject.Coupon.discount_type) {
                        var c = RespObject.Coupon.discount_percent;
                        (i = o - (s = (o * c) / 100)),
                            (t = i = Math.round(100 * i) / 100),
                            (l = RespObject.Coupon.discount_percent);
                        $(".disCode").html('"' + a + '"'),
                            $(".disPer").html(l),
                            console.log(a),
                            console.log(l),
                            $(".coupon-discount-area").show();
                    }
                    (s = parseFloat(s).toFixed(2)),
                        (i = parseFloat(i).toFixed(2)),
                        (t = parseFloat(t).toFixed(2)),
                        $(".DiscountAmount").html("$" + s),
                        $("#DiscountNewAmount").html("$" + i),
                        $(".GrandTotalAmount").html("$" + t),
                        update_total(s, i, t, r),
                        $(".codemsg").hide(),
                        $(".couponApplied").show(),
                        $(".coupon-field").hide();
                } else
                    $(".codemsg").addClass("invalid").html(RespObject.Message),
                        $(".codemsg").show();
                $(".loadingimg").css("display", "none");
            },
            error: function () {
                console.log("something went wrong please try again"),
                    $(".loadingimg").css("display", "none");
            },
        });
}
function update_total(e, r, a, t) {
    var o = BASE_URL + "carts/update_coupon_total";
    $.ajax({
        type: "POST",
        url: o,
        data: { cm: e, dm: r, gt: a, ci: t },
        dataType: "html",
        beforeSend: function () {},
        success: function (e) {
            (e = e.replace(/\s\s+/g, " ")),
                (RespObject = JSON.parse(e)),
                console.log(RespObject);
        },
        error: function () {},
    });
}
function reapplycoupon() {
    setTimeout(function () {
        $("#ApplyCoupon").trigger("click");
    }, 1e3);
}
function loadVideoDetails(e) {
    if (e > 0) {
        var r = BASE_URL + "exam/ajaxGetVideoDetails";
        $.ajax({
            type: "POST",
            url: r,
            data: { vid: e },
            dataType: "html",
            beforeSend: function () {
                $(".CourseListData").before(function () {
                    return getLoadingImg();
                });
            },
            success: function (e) {
                $(".CourseListData").html(e), $("#imgLoader").remove();
            },
            error: function () {
                alert("something went wrong please try again"),
                    $("#imgLoader").remove();
            },
        });
    }
}
function convertToMonthsYears(e) {
    if (0 == e) var r = "Life Time";
    else if (e > 0 && e < 365) r = Math.ceil(e / 30) + " Months";
    else r = Math.ceil(e / 365) + " Years";
    return r;
}
function ChangePriceByMonth(e) {
    var r = e.split(":"),
        a = r[0],
        t = r[1],
        o = convertToMonthsYears(a);
    $("#lbl_price").html(t),
        $("#checkout_price").val(t),
        $("#price").val(t),
        $("#free_update").html(o),
        $("#free_update_val").val(a);
    var n = $("#subscription_plan").val();
    "1" == n
        ? ($("#plan_type").html("Single User - 2 PC's"),
          $("#usage").val("Single User - 2 PC's"))
        : "2" == n
        ? ($("#plan_type").html("10 Users - 25 PC's"),
          $("#usage").val("10 Users - 25 PC's"))
        : "3" == n &&
          ($("#plan_type").html("Unlimited Users, PC's"),
          $("#usage").val("Unlimited Users, PC's"));
}
function ChangePriceByType(e) {
    var r = $("#sub_options_container_" + e).html();
    $("#subscription_options").html(r);
    var a = $("#subscription_options").val().split(":"),
        t = a[1],
        o = a[0],
        n = ((t = a[1]), convertToMonthsYears(o));
    $("#lbl_price").html(t),
        $("#checkout_price").val(t),
        $("#price").val(t),
        $("#free_update").html(n),
        $("#free_update_val").val(o),
        $("#lbl_price").html(t),
        $("#checkout_price").val(t),
        $("#price").val(t),
        "1" == e
            ? ($("#plan_type").html("Single User - 2 PC's"),
              $("#usage").val("Single User - 2 PC's"))
            : "2" == e
            ? ($("#plan_type").html("10 Users - 25 PC's"),
              $("#usage").val("10 Users - 25 PC's"))
            : "3" == e &&
              ($("#plan_type").html("Unlimited Users, PC's"),
              $("#usage").val("Unlimited Users, PC's"));
}
function submitBundle() {
    $("#bundleInfoForm").submit();
}
function validatePreOrder() {
    var e = $.trim($("#preorder-email").val());
    if ("" == e)
        return (
            $("#preorderMsg").show(),
            $("#preorderMsg").html(
                '<p class="alert alert-danger">Please enter your email address.</p>'
            ),
            !1
        );
    if (0 == validateEmail(e))
        return (
            (msg =
                '<p class="alert alert-danger">Please enter valid email address.</p>'),
            $("#preorderMsg").show(),
            $("#preorderMsg").html(msg),
            !1
        );
    var r = BASE_URL + "/exams/preorder",
        a = $("#preorder-form").serialize();
    $.ajax({
        type: "POST",
        url: r,
        data: a,
        dataType: "json",
        beforeSend: function () {
            $("#btnPreOrder").before(function () {
                return getLoadingImg();
            });
        },
        success: function (e) {
            e.Error
                ? ($("#preorderMsg").show(),
                  $("#preorderMsg").html(
                      '<p class="alert alert-danger">' + e.MSG + "</p>"
                  ))
                : ($("#preorderMsg").show(),
                  $("#preorderMsg").html(
                      '<p class="alert alert-success">' + e.MSG + "</p>"
                  )),
                $("#imgLoader").remove();
            $("#perOrderExamId").val();
        },
        error: function () {
            alert("something went wrong please try again"),
                $("#imgLoader").remove();
        },
    });
}
function validateEmail(e) {
    return /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(e);
}
function ajaxLoadVendorExams(e) {
    if (e > 0) {
        var r = BASE_URL + "demos/ajax_get_exams";
        $.ajax({
            type: "POST",
            url: r,
            data: { vid: e },
            dataType: "json",
            beforeSend: function () {},
            success: function (e) {
                for (
                    var r = '<option value="">Select Exam</option>', a = 0;
                    a < e.length;
                    a++
                )
                    r +=
                        '<option value="' +
                        e[a].exam_code +
                        '">' +
                        e[a].exam_code +
                        "</option>";
                $("#demo_exam_id").find("option").remove().end().append(r),
                    $("#imgLoader").remove();
            },
            error: function () {
                alert("something went wrong please try again"),
                    $("#imgLoader").remove();
            },
        });
    } else {
        $("#demo_exam_id")
            .find("option")
            .remove()
            .end()
            .append('<option value="">Select Exam</option>'),
            $("#imgLoader").remove();
    }
}
function validateDemoForm() {
    var e = $("#demo_product_type").val(),
        r = $("#demo_vendor_id").val(),
        a = $("#demo_exam_id").val(),
        t = $("#demo_email").val();
    return "" == e
        ? ($("#demoMsg").show(),
          $("#demoMsg").html(
              '<p class="alert alert-danger">Please select type.</p>'
          ),
          !1)
        : "" == r
        ? ($("#demoMsg").show(),
          $("#demoMsg").html(
              '<p class="alert alert-danger">Please select vendor.</p>'
          ),
          !1)
        : "" == a
        ? ($("#demoMsg").show(),
          $("#demoMsg").html(
              '<p class="alert alert-danger">Please select exam.</p>'
          ),
          !1)
        : "" == t
        ? ($("#demoMsg").show(),
          $("#demoMsg").html(
              '<p class="alert alert-danger">Please enter your email address.</p>'
          ),
          !1)
        : 0 == validateEmail(t)
        ? ((msg =
              '<p class="alert alert-danger">Please enter valid email address.</p>'),
          $("#demoMsg").show(),
          $("#demoMsg").html(msg),
          !1)
        : void $("#demos_form").submit();
}
function updateLicense(e, r) {
    if (e <= 2)
        var a = "69",
            t = 0;
    else if (3 == e) (a = "84"), (t = 21);
    else if (4 == e) (a = "112"), (t = 28);
    else if (5 == e) (a = "140"), (t = 35);
    else if (6 == e) (a = "168"), (t = 42);
    $("#sub_total_" + r).html("$" + a),
        $("#license_discount_" + r).html("$" + t + " discount"),
        e > 2
            ? $("#license_discount_" + r).show()
            : $("#license_discount_" + r).hide();
}
function validatePasswordChange() {
    var e = $.trim($("#password").val()),
        r = $.trim($("#cpassword").val());
    if ("" == e)
        return (
            $("#passwordErrorMsg").show(),
            $("#passwordErrorMsg").html(
                '<p class="alert alert-danger">Please enter your password.</p>'
            ),
            !1
        );
    if (e != r)
        return (
            $("#passwordErrorMsg").show(),
            $("#passwordErrorMsg").html(
                '<p class="alert alert-danger">Password should match with confirm password.</p>'
            ),
            !1
        );
    var a = BASE_URL + "users/changePassword",
        t = $("#passwordForm").serialize();
    $.ajax({
        type: "POST",
        url: a,
        data: t,
        dataType: "json",
        beforeSend: function () {
            $("#passwordErrorMsg").before(function () {
                return getLoadingImg();
            });
        },
        success: function (e) {
            e.Error
                ? ($("#passwordErrorMsg").show(),
                  $("#passwordErrorMsg").html(
                      '<p class="alert alert-danger">' + e.MSG + "</p>"
                  ))
                : ($("#passwordErrorMsg").show(),
                  $("#passwordErrorMsg").html(
                      '<p class="alert alert-success">' + e.MSG + "</p>"
                  )),
                $("#imgLoader").remove();
        },
        error: function () {
            alert("something went wrong please try again"),
                $("#imgLoader").remove();
        },
    });
}
function validatePasswordChange2() {
    var e = $.trim($("#password").val()),
        r = $.trim($("#cpassword").val());
    return "" == e
        ? ($("#passwordErrorMsg").show(),
          $("#passwordErrorMsg").html(
              '<p class="alert alert-danger">Please enter your password.</p>'
          ),
          !1)
        : e != r
        ? ($("#passwordErrorMsg").show(),
          $("#passwordErrorMsg").html(
              '<p class="alert alert-danger">Password should match with confirm password.</p>'
          ),
          !1)
        : void 0;
}
function validateUserProfile() {
    var e = $.trim($("#full_name").val()),
        r = $.trim($("#email").val()),
        a = $.trim($("#country_id").val()),
        t =
            ($.trim($("#gender").val()),
            $.trim($("#mobile").val()),
            $.trim($("#mobile").val()));
    if ("" == e)
        return (
            $("#profileErrorMsg").show(),
            $("#profileErrorMsg").html(
                '<p class="alert alert-danger">Please enter your name.</p>'
            ),
            !1
        );
    if ("" == r)
        return (
            $("#profileErrorMsg").show(),
            $("#profileErrorMsg").html(
                '<p class="alert alert-danger">Please enter your email address.</p>'
            ),
            !1
        );
    if ("" == a)
        return (
            $("#profileErrorMsg").show(),
            $("#profileErrorMsg").html(
                '<p class="alert alert-danger">Please select your country.</p>'
            ),
            !1
        );
    if ("" == t)
        return (
            $("#profileErrorMsg").show(),
            $("#profileErrorMsg").html(
                '<p class="alert alert-danger">Please enter your mobile.</p>'
            ),
            !1
        );
    var o = BASE_URL + "users/updateprofile",
        n = $("#userProfileForm").serialize();
    $.ajax({
        type: "POST",
        url: o,
        data: n,
        dataType: "json",
        beforeSend: function () {
            $("#btnChangePasswordSubmit").before(function () {
                return getLoadingImg();
            });
        },
        success: function (e) {
            e.Error
                ? ($("#profileErrorMsg").show(),
                  $("#profileErrorMsg").html(
                      '<p class="alert alert-danger">' + e.MSG + "</p>"
                  ))
                : ($("#profileErrorMsg").show(),
                  $("#profileErrorMsg").html(
                      '<p class="alert alert-success">' + e.MSG + "</p>"
                  )),
                $("#imgLoader").remove();
        },
        error: function () {
            alert("something went wrong please try again"),
                $("#imgLoader").remove();
        },
    });
}
function checkEmailExists(e) {
    var r = BASE_URL + "register/checkifEmailExists";
    $.ajax({
        type: "POST",
        url: r,
        data: { email: e },
        dataType: "json",
        beforeSend: function () {
            $("#email").before(function () {
                return getLoadingImg();
            }),
                $("#email_pay").before(function () {
                    return getLoadingImg();
                });
        },
        success: function (r) {
            "Success" == r.msgStatus
                ? ($("p.error").remove(), $("#imgLoader").remove())
                : ($("#imgLoader").remove(),
                  $("p.error").remove(),
                  $("#email").after(
                      '<p class="error">' +
                          e +
                          ', this account already exists. <a class="popupBox" href="' +
                          BASE_URL +
                          'login/login_popup">Kindly Login to your account.</a></p>'
                  ),
                  $("#email_pay").after(
                      '<p class="error">' +
                          e +
                          ', this account already exists.  <a class="popupBox" href="' +
                          BASE_URL +
                          'login/login_popup">Kindly Login to your account.</a></p>'
                  ),
                  $(".popupBox").magnificPopup({
                      type: "ajax",
                      alignTop: !0,
                      closeOnBgClick: !0,
                      showCloseBtn: !0,
                      modal: !0,
                      overflowY: "scroll",
                      fixedContentPos: !0,
                  })),
                $("#imgLoader").remove();
        },
        error: function () {
            alert("something went wrong please try again"),
                $("#imgLoader").remove();
        },
    });
}
function updateBundlePrice() {
    var e = $("#subscription").val(),
        r = $("#subscription_plan").val(),
        a = $("#price").val();
    $("#checkout_price").val(),
        $("#subscription_price_3_inc").val(),
        $("#subscription_price_6_inc").val(),
        $("#subscription_price_12_inc").val(),
        $("#individual_pcs").val(),
        $("#individual_price_inc").val(),
        $("#corporate_pcs").val(),
        $("#corporate_price_inc").val(),
        $("#trainer_pcs").val(),
        $("#trainer_price_inc").val();
    (a = parseInt(a) + parseInt($("#subscription_price_" + e + "_inc").val())),
        (a = parseInt(a) + parseInt($("#" + r + "_price_inc").val())),
        $("#checkout_price").val(a),
        $("#lbl_price").html(a);
    var t = 30 * e;
    $("#free_update").html(t + " days"),
        $("#plan_type").html($("#" + r + "_pcs").val() + " PC's");
}
function closePopup() {
    $.magnificPopup.close();
}
function checkEmailExistsforReseller(e) {
    if ("" == e) return !1;
    var r = BASE_URL + "register/checkifEmailExists";
    $.ajax({
        type: "POST",
        url: r,
        data: { email: e },
        dataType: "json",
        success: function (r) {
            "Success" == r.msgStatus
                ? ($(".createCustomer p.error").remove(),
                  $(".createCustomer #btnCreateResellerUser").removeAttr(
                      "disabled"
                  ))
                : ($(".createCustomer p.error").remove(),
                  $(".createCustomer #email").val(""),
                  $(".createCustomer #email").after(
                      '<p class="error">' +
                          e +
                          " already exists please try another email address.</p>"
                  ));
        },
        error: function () {
            alert("something went wrong please try again");
        },
    });
}
function getResellerUsers() {
    var e = BASE_URL + "users/getResellerUsers";
    $.ajax({
        type: "POST",
        url: e,
        dataType: "json",
        success: function (e) {
            e.data &&
                (console.log(e.data),
                $(".listCustomers #dataTable").DataTable().destroy(),
                $(".listCustomers #dataTable tbody").html(e.data),
                $(".listCustomers #dataTable").DataTable({
                    aaSorting: [[2, "desc"]],
                }));
        },
        error: function () {
            alert("something went wrong please try again");
        },
    });
}
function deleteUser(e) {
    if (!confirm("Are you sure you want to delete this User?")) return !1;
    $("#user_" + e).remove();
    var r = BASE_URL + "users/deleteUser";
    $.ajax({
        type: "POST",
        url: r,
        data: { user_id: e },
        dataType: "json",
        success: function (r) {
            "Success" == r.msgStatus &&
                ($("#user_" + e).remove(), getResellerUsers());
        },
        error: function () {
            alert("something went wrong please try again");
        },
    });
}
function validateShareForm(e) {
    var r = $("#" + e + " #user_id option:selected").val();
    if ("" == r)
        return $("#" + e + " #user_id").css("border", "1px solid red"), !1;
    var a = $("#" + e + " #share_product_form").serialize(),
        t = BASE_URL + "users/share_product";
    $.ajax({
        type: "POST",
        url: t,
        data: a,
        dataType: "json",
        beforeSend: function () {
            toggleDisable("btn-demo", !0),
                $("#btn-demo").after(function () {
                    return getLoadingImg();
                });
        },
        success: function (a) {
            "Error" == a.msgStatus
                ? $("#" + e + " #response").html(a.msg)
                : "Success" == a.msgStatus &&
                  ($("#" + e + " #response").html(a.msg),
                  getUserSharedProducts(r),
                  setTimeout(function () {}, 2e3)),
                toggleDisable("btn-demo", !1),
                $("#imgLoader").remove();
        },
        error: function () {
            alert("something went wrong please try again"),
                toggleDisable("btn-demo", !1),
                $("#imgLoader").remove();
        },
    });
}
function getLisenceKey(e, r, a, t, o) {
    if (e) {
        var n = e.replace(/[_\W]+/g, "");
        n = n + "_practice_" + r;
        var s = BASE_URL + "users/getLisenceKey";
        $.ajax({
            type: "POST",
            url: s,
            data: {
                exam_code: e,
                order_id: r,
                validity: a,
                allowed_devices: t,
                qty: o,
            },
            dataType: "json",
            beforeSend: function () {
                $("#" + n + " #serialKeyBtn").before(function () {
                    return getLoadingImg();
                }),
                    $("#" + n + " #serialKeyBtn").remove();
            },
            success: function (e) {
                var r = e.html,
                    a = e.popup,
                    t = e.share;
                $(".member-area-container").append(a),
                    $(".member-area-container").append(t),
                    $("body").on(
                        "click",
                        'input[name="extension_type"]',
                        function () {
                            if ("add_users" == $(this).val()) {
                                $(".hideifDuration").show();
                                var e = $(
                                    'input[name="lisence_key_price_activation"]'
                                ).val();
                                $("#lisence_update_form #lbl_price").html(e);
                            } else {
                                $(".hideifDuration").hide();
                                e = $('input[name="lisence_key_price"]').val();
                                $("#lisence_update_form #lbl_price").html(e);
                            }
                        }
                    ),
                    $("#" + n + " .serialKeyBox").append(r),
                    $("#" + n + " #serialKeyBtn").remove(),
                    $("#imgLoader").remove();
                var o = $(".lisencePopup #cardNumber"),
                    s = $(".lisencePopup #card-number-field"),
                    i = $(".lisencePopup #cvv");
                o.payform("formatCardNumber"),
                    i.payform("formatCardCVC"),
                    o.keyup(function () {
                        o.removeClass("visa"),
                            o.removeClass("amex"),
                            o.removeClass("mastercard"),
                            console.log($.payform.parseCardType(o.val())),
                            0 == $.payform.validateCardNumber(o.val())
                                ? s.addClass("has-error")
                                : (s.removeClass("has-error"),
                                  s.addClass("has-success")),
                            "visa" == $.payform.parseCardType(o.val())
                                ? o.addClass("visa")
                                : "amex" == $.payform.parseCardType(o.val())
                                ? o.addClass("amex")
                                : "mastercard" ==
                                      $.payform.parseCardType(o.val()) &&
                                  o.addClass("mastercard");
                    });
            },
            error: function () {
                alert("something went wrong please try again"),
                    $("#" + n + " #imgLoader").remove();
            },
        });
    } else
        $("#" + n + " .serialKeyBox").html(""),
            $("#" + n + " #imgLoader").remove();
}
function deleteUserProduct(e, r, a, t, o) {
    if (!confirm("Are you sure you want to remove this product from user?"))
        return !1;
    $("#userProd_" + e).remove();
    var n = BASE_URL + "users/deleteUserProduct";
    $.ajax({
        type: "POST",
        url: n,
        data: { user_id: r, exam: a, serial_key: t, order_id: o },
        dataType: "json",
        success: function (a) {
            "Success" == a.msgStatus &&
                ($("#userProd_" + e).remove(), getUserSharedProducts(r));
        },
        error: function () {
            alert("something went wrong please try again");
        },
    });
}
function getUserSharedProducts(e) {
    var r = BASE_URL + "users/getUserSharedProducts";
    $.ajax({
        type: "POST",
        url: r,
        data: { reseller_id: e },
        dataType: "json",
        success: function (e) {
            e.data &&
                ($(".listCustomers #dataTableProducts").DataTable().destroy(),
                $(".listCustomers #dataTableProducts tbody").html(e.data),
                $(".listCustomers #dataTableProducts").DataTable());
        },
        error: function () {
            alert("something went wrong please try again");
        },
    });
}
function updateBundlePriceNew(e) {
    var r = "#" + e;
    console.log(r + " #subscription");
    var a = $(r + " #subscription").val(),
        t = $(r + " #subscription_plan").val();
    console.log(a), console.log(t);
    var o = $(r + " #price").val();
    $(r + " #checkout_price").val(),
        $(r + " #subscription_price_3_inc").val(),
        $(r + " #subscription_price_6_inc").val(),
        $(r + " #subscription_price_12_inc").val(),
        $(r + " #individual_pcs").val(),
        $(r + " #individual_price_inc").val(),
        $(r + " #corporate_pcs").val(),
        $(r + " #corporate_price_inc").val(),
        $(r + " #trainer_pcs").val(),
        $(r + " #trainer_price_inc").val();
    (o =
        parseInt(o) +
        parseInt($(r + " #subscription_price_" + a + "_inc").val())),
        (o = parseInt(o) + parseInt($(r + " #" + t + "_price_inc").val())),
        $(r + " #checkout_price").val(o),
        $(r + " #lbl_price").html(o);
    var n = 30 * a;
    console.log(n + " days"),
        console.log($(r + " #" + t + "_pcs").val() + " PC's"),
        $(r + " #free_update").html(n + " days"),
        $(r + " #plan_type").html($(r + " #" + t + "_pcs").val() + " PC's");
}
function validateLisenceFormPopup(e) {
    if (0 == $("#cardNumber").val().length)
        return $("#cardNumber").css("border-color", "red"), !1;
    if (0 == $("#cvv").val().length)
        return $("#cvv").css("border-color", "red"), !1;
    $("input").css("border-color", "#ccc");
    var r = $("#" + e + " #lisence_update_form").serialize(),
        a = BASE_URL + "users/extendLisence";
    $.ajax({
        type: "POST",
        url: a,
        data: r,
        dataType: "json",
        beforeSend: function () {
            toggleDisable("btn-demo", !0),
                $("#btn-demo").after(function () {
                    return getLoadingImg();
                });
        },
        success: function (r) {
            "Error" == r.msgStatus
                ? $("#" + e + " #response").html(r.msg)
                : "Success" == r.msgStatus &&
                  ($("#" + e + " #response").html(r.msg),
                  setTimeout(function () {
                      redirectPage(BASE_URL + "users/");
                  }, 2e3)),
                toggleDisable("btn-demo", !1),
                $("#imgLoader").remove();
        },
        error: function () {
            alert("something went wrong please try again"),
                toggleDisable("btn-demo", !1),
                $("#imgLoader").remove();
        },
    });
}
function extendLicensePrice() {
    var e = 30 * $("#num-of-licenses").val();
    $('input[name="lisence_key_price_activation"]').val(e),
        $("#lbl_price").text(e);
}
function replaceThisKey(e, r, a, t) {
    var o = { serial_key: e, customer_email: r, exam_code: a, order_id: t },
        n = BASE_URL + "users/replaceKeyFunc";
    $.ajax({
        type: "POST",
        url: n,
        data: o,
        dataType: "json",
        beforeSend: function () {
            $("#replaceKey").after(function () {
                return getLoadingImg();
            });
        },
        success: function (e) {
            location.reload(), $("#imgLoader").remove();
        },
        error: function () {
            location.reload(), console.log(response), $("#imgLoader").remove();
        },
    });
}
function submitCartForm() {
    return 0 == $("#first_name").val().length
        ? ($(".first_name-error").text("The First Name field is required."), !1)
        : 0 == $("#email").val().length
        ? ($(".email-error").text("The Email field is required."), !1)
        : 0 == $("#street_address").val().length
        ? ($(".street_address-error").text(
              "The Street Address field is required."
          ),
          !1)
        : 0 == $("#city").val().length
        ? ($(".city-error").text("The City field is required."), !1)
        : 0 == $("#zip").val().length
        ? ($(".zip-error").text("The Zip Code field is required."), !1)
        : 0 == $("#InputCountry").val().length
        ? ($(".InputCountry-error").text("The Country field is required."), !1)
        : 0 == $("#cardNumber").val().length
        ? ($(".cardNumber-error").text("The Card Number field is required."),
          !1)
        : 0 == $("#cvv").val().length
        ? ($(".cvv-error").text("The Card Code field is required."), !1)
        : ($("#checkoutForm").submit(),
          $(".loadingimg h3").text(
              "Please Wait - Your Transaction is in Process......."
          ),
          void $(".loadingimg").show());
}
function submitPaypalForm() {
    if (0 == $(".paypal_mail").val().length)
        return $(".paypal_mail_error").text("The Email field is required."), !1;
    $("#checkoutPaypalForm").submit(), $(".paypal_mail_error").text("");
}
$(document).ready(function () {
    var e = new Date(),
        r = Math.random().toString(36).substr(2, 5),
        a = Math.random().toString(36).substr(2, 5),
        t = Math.random().toString(36).substr(2, 5),
        o =
            e.getFullYear() +
            "" +
            r +
            ("0" + (e.getMonth() + 1)).slice(-2) +
            a +
            ("0" + e.getDate()).slice(-2) +
            t;
    setTimeout(function () {
        var e = $("input[name='g-recaptcha-response']").val();
        $("input[name='g-recaptcha-response']").val(e + "" + o);
    }, 3e3),
        $("#InputCountry").change(function () {
            var e = $(this).val();
            if (e) {
                var r = '<option value="">Please Wait...</option>';
                $("#state").find("option").remove().end().append(r);
                var a = BASE_URL + "certifications/ajaxGetStates";
                $.ajax({
                    type: "POST",
                    url: a,
                    data: { cid: e },
                    dataType: "json",
                    beforeSend: function () {
                        $("#state").before(function () {
                            return getLoadingImg();
                        });
                    },
                    success: function (e) {
                        for (
                            var r = '<option value="">Select State</option>',
                                a = 0;
                            a < e.length;
                            a++
                        )
                            r +=
                                '<option value="' +
                                e[a].id +
                                '">' +
                                e[a].name +
                                "</option>";
                        (r += '<option value="other">other</option>'),
                            $("#state").find("option").remove().end().append(r),
                            $("#imgLoader").remove();
                    },
                    error: function () {
                        alert("something went wrong please try again"),
                            $("#imgLoader").remove();
                    },
                });
            } else {
                r = '<option value="">Select State</option>';
                $("#state").find("option").remove().end().append(r),
                    $("#imgLoader").remove();
            }
        }),
        $("#country_id").change(function () {
            var e = $(this).val();
            if (e) {
                var r = '<option value="">Please Wait...</option>';
                $("#state").find("option").remove().end().append(r);
                var a = BASE_URL + "certifications/ajaxGetStates";
                $.ajax({
                    type: "POST",
                    url: a,
                    data: { cid: e },
                    dataType: "json",
                    beforeSend: function () {
                        $("#state").before(function () {
                            return getLoadingImg();
                        });
                    },
                    success: function (e) {
                        for (
                            var r = '<option value="">Select State</option>',
                                a = 0;
                            a < e.length;
                            a++
                        )
                            r +=
                                '<option value="' +
                                e[a].id +
                                '">' +
                                e[a].name +
                                "</option>";
                        (r += '<option value="other">other</option>'),
                            $("#state").find("option").remove().end().append(r),
                            $("#imgLoader").remove();
                    },
                    error: function () {
                        alert("something went wrong please try again"),
                            $("#imgLoader").remove();
                    },
                });
            } else {
                r = '<option value="">Select State</option>';
                $("#state").find("option").remove().end().append(r),
                    $("#imgLoader").remove();
            }
        }),
        $("#InputCountry_pay").change(function () {
            var e = $(this).val();
            if (e) {
                var r = '<option value="">Please Wait...</option>';
                $("#state_pay").find("option").remove().end().append(r);
                var a = BASE_URL + "certifications/ajaxGetStates";
                $.ajax({
                    type: "POST",
                    url: a,
                    data: { cid: e },
                    dataType: "json",
                    beforeSend: function () {
                        $("#state_pay").before(function () {
                            return getLoadingImg();
                        });
                    },
                    success: function (e) {
                        for (
                            var r = '<option value="">Select State</option>',
                                a = 0;
                            a < e.length;
                            a++
                        )
                            r +=
                                '<option value="' +
                                e[a].id +
                                '">' +
                                e[a].name +
                                "</option>";
                        (r += '<option value="other">other</option>'),
                            $("#state_pay")
                                .find("option")
                                .remove()
                                .end()
                                .append(r),
                            $("#imgLoader").remove();
                    },
                    error: function () {
                        alert("something went wrong please try again"),
                            $("#imgLoader").remove();
                    },
                });
            } else {
                r = '<option value="">Select State</option>';
                $("#state_pay").find("option").remove().end().append(r),
                    $("#imgLoader").remove();
            }
        });
}),
    $(function () {
        $(".playVidoeTestimonail").on("click", function () {
            var e = $(this).attr("id"),
                r = "https://www.youtube.com/embed/" + $(this).attr("data");
            $("#mainVideo").html(
                '<iframe width="590" height="293" src="' +
                    r +
                    '" frameborder="0" allowfullscreen></iframe>'
            );
            var a = $("#videoDesc_" + e).val();
            $("#mainVideoDesc").html(a);
        }),
            $(".cartQty").keydown(function (e) {
                46 == e.keyCode ||
                    8 == e.keyCode ||
                    ((e.keyCode < 48 || e.keyCode > 57) && e.preventDefault());
            }),
            $(".addonProducts").change(function () {
                if ($(this).is(":checked")) {
                    var e = $(this).attr("id");
                    $("#" + e).submit();
                }
            }),
            $(".cartQty").on("keyup", function (e) {
                updateCartQty();
            }),
            $("#ApplyCoupon").on("click", function () {
                ($Coupon = $("#coupon-code")),
                    "" == $Coupon.val()
                        ? $Coupon.focus()
                        : validate_coupon_code($Coupon.val());
            }),
            $("#btnUserProfileSubmit").on("click", function () {
                validateUserProfile();
            }),
            $("#btnChangePasswordSubmit").on("click", function () {
                validatePasswordChange();
            });
    }),
    $("body").on("click", 'input[name="extension_type"]', function () {
        if ("add_users" == $(this).val()) {
            $(".hideifDuration").show();
            var e = $('input[name="lisence_key_price_activation"]').val();
            $("#lisence_update_form #lbl_price").html(e);
        } else {
            $(".hideifDuration").hide();
            e = $('input[name="lisence_key_price"]').val();
            $("#lisence_update_form #lbl_price").html(e);
        }
    }),
    $("body").on("click", 'input[name="noofusers"]', function () {
        var e = $(this).val();
        if (e > 1) {
            $(".hideifDuration").show();
            var r = $('input[name="lisence_key_price_activation_base"]').val();
            (r *= e),
                $('input[name="lisence_key_price_activation"]').val(r),
                $("#lisence_update_form #lbl_price").html(r);
        } else {
            r = $('input[name="lisence_key_price_activation_base"]').val();
            $('input[name="lisence_key_price_activation"]').val(r),
                $("#lisence_update_form #lbl_price").html(r);
        }
    }),
    $("body").on("keyup", 'input[name="noofusers"]', function () {
        var e = $(this).val();
        if (e > 1) {
            $(".hideifDuration").show();
            var r = $('input[name="lisence_key_price_activation_base"]').val();
            (r *= e),
                $('input[name="lisence_key_price_activation"]').val(r),
                $("#lisence_update_form #lbl_price").html(r);
        } else {
            r = $('input[name="lisence_key_price_activation_base"]').val();
            $('input[name="lisence_key_price_activation"]').val(r),
                $("#lisence_update_form #lbl_price").html(r);
        }
    }),
    $("body").on("submit", "#lisence_update_form", function () {
        if ((event.preventDefault(), !$("#lisence_update_form").valid()))
            return !1;
        validateLisenceForm("lisence_update_form");
    }),
    $(document).ready(function () {
        $('.member-login input[type="radio"]').click(function () {
            var e = this.value;
            "member-register" == e
                ? ($("#member-login").hide(), $("#member-register").show())
                : "member-login" == e &&
                  ($("#member-register").hide(), $("#member-login").show());
        });
    }),
    $(".popupBox").magnificPopup({
        type: "ajax",
        alignTop: !0,
        closeOnBgClick: !0,
        showCloseBtn: !0,
        modal: !0,
        overflowY: "scroll",
        fixedContentPos: !0,
    }),
    $(document).ready(function () {
        $(".listCustomers #dataTable").DataTable({ aaSorting: [[2, "desc"]] }),
            $(".listCustomers #dataTableProducts").DataTable(),
            $("#btnCreateResellerUser").click(function () {
                var e = $(".createCustomer #full_name").val(),
                    r = $(".createCustomer #email").val(),
                    a = $(".createCustomer #password").val();
                $(".createCustomer #check_email").val();
                if (
                    ("" == e
                        ? $(".createCustomer #full_name").css(
                              "border",
                              "1px solid red"
                          )
                        : $(".createCustomer #full_name").css(
                              "border",
                              "1px solid #ccc"
                          ),
                    "" == r
                        ? $(".createCustomer #email").css(
                              "border",
                              "1px solid red"
                          )
                        : $(".createCustomer #email").css(
                              "border",
                              "1px solid #ccc"
                          ),
                    "" == a
                        ? $(".createCustomer #password").css(
                              "border",
                              "1px solid red"
                          )
                        : $(".createCustomer #password").css(
                              "border",
                              "1px solid #ccc"
                          ),
                    "" != e && "" != r && "" != a)
                ) {
                    var t = BASE_URL + "users/createResellerUser";
                    $.ajax({
                        type: "POST",
                        url: t,
                        data: { full_name: e, email: r, password: a },
                        dataType: "json",
                        success: function (e) {
                            "Success" == e.msgStatus
                                ? ($("#CustomerErrorMsg").show(),
                                  $("#CustomerErrorMsg").html(
                                      '<p class="alert alert-success">' +
                                          e.msg +
                                          "</p>"
                                  ),
                                  $(".createCustomer #full_name").val(""),
                                  $(".createCustomer #email").val(""),
                                  $(".createCustomer #password").val(""),
                                  getResellerUsers(),
                                  setTimeout(function () {
                                      $("#CustomerErrorMsg").hide();
                                  }, 5e3))
                                : ($("#CustomerErrorMsg").show(),
                                  $("#CustomerErrorMsg").html(
                                      '<p class="alert alert-danger">' +
                                          e.msg +
                                          "</p>"
                                  ),
                                  setTimeout(function () {
                                      $("#CustomerErrorMsg").hide();
                                  }, 5e3));
                        },
                        error: function () {
                            alert("something went wrong please try again");
                        },
                    });
                }
            });
    });
